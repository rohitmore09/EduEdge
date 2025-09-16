<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

date_default_timezone_set('Asia/Kolkata');

// TODO: Replace with your actual client credentials
$clientId = 'S8T10Em6_DeLb0E_63SqDa2Up54EJABPO-UNH-Mpz5Q';
$clientSecret = 'u2NUO2zVzUQkYifT_vfzGpFxm85dbiZ2nOy7frIchE8';

// Read JSON POST input
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);

if (!$input) {
    echo json_encode(['success' => false, 'message' => 'Invalid JSON input']);
    exit;
}

$formData = $input['formData'] ?? null;
$calendlyEvent = $input['calendlyEvent'] ?? null;

if (!$formData || !$calendlyEvent) {
    echo json_encode(['success' => false, 'message' => 'Missing form data or event data']);
    exit;
}

// Include database config
require_once 'config.php';

// reCAPTCHA v3 validation
$recaptchaSecret = '6LeKmkorAAAAAM17974PCLE-gJXYisYE95KoMTEe';
$recaptchaToken = $formData['recaptcha_token'] ?? null;
if (!$recaptchaToken) {
    echo json_encode(['success' => false, 'message' => 'Missing reCAPTCHA token']);
    exit;
}

$verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
$verifyResponse = file_get_contents($verifyUrl . '?secret=' . urlencode($recaptchaSecret) . '&response=' . urlencode($recaptchaToken));
$captchaData = json_decode($verifyResponse, true);

if (!$captchaData['success'] || $captchaData['score'] < 0.5) {
    echo json_encode(['success' => false, 'message' => 'reCAPTCHA verification failed']);
    exit;
}

// Function to fetch access token from DB (id=1)
function getAccessToken($pdo) {
    $stmt = $pdo->prepare("SELECT access_token FROM access_token WHERE id = 1 LIMIT 1");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row['access_token'] ?? null;
}

// Function to refresh Calendly token using refresh_token
function refreshCalendlyAccessToken($pdo, $clientId, $clientSecret) {
    // Fetch refresh_token for id=1
    $stmt = $pdo->prepare("SELECT refresh_token,token_count FROM access_token WHERE id = 1 LIMIT 1");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $refreshToken = $row['refresh_token'] ?? null;
    $token_count = $row['token_count'] + 1;

    if (!$refreshToken) return false;

    $postFields = http_build_query([
        'grant_type' => 'refresh_token',
        'refresh_token' => $refreshToken,
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://auth.calendly.com/oauth/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    // Uncomment next line only for local dev/testing if SSL issues
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        error_log('Curl error while refreshing token: ' . curl_error($ch));
        curl_close($ch);
        return false;
    }
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data['access_token']) && isset($data['refresh_token'])) {
        // Update tokens where id=1
        $stmt = $pdo->prepare("UPDATE access_token SET access_token = ?, refresh_token = ?, token_count = ?, updated_at = NOW() WHERE id = 1");
        $stmt->execute([
            $data['access_token'],
            $data['refresh_token'],
            $token_count,
        ]);
        return $data['access_token'];
    } else {
        error_log('Failed to refresh token. Response: ' . $response);
    }

    return false;
}

// Function to fetch Calendly event
function fetchCalendlyEvent($eventUuid, $accessToken) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.calendly.com/scheduled_events/$eventUuid");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $accessToken",
        "Content-Type: application/json",
    ]);
    // Uncomment next line only for local dev/testing if SSL issues
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
}

// Get access token and event UUID
$accessToken = getAccessToken($pdo);
$eventUri = $calendlyEvent['event']['uri'] ?? null;
if (!$eventUri) {
    echo json_encode(['success' => false, 'message' => 'Invalid Calendly event URI']);
    exit;
}
$parts = explode('/', $eventUri);
$eventUuid = end($parts);

// First API Call
$book_data = fetchCalendlyEvent($eventUuid, $accessToken);
//dd($book_data);
// Handle unauthenticated case
if (isset($book_data['title']) && $book_data['title'] === 'Unauthenticated') {
    // Refresh token
    $accessToken = refreshCalendlyAccessToken($pdo, $clientId, $clientSecret);
    if (!$accessToken) {
        echo json_encode(['success' => false, 'message' => 'Token refresh failed']);
        exit;
    }

    // Retry Calendly API call
    $book_data = fetchCalendlyEvent($eventUuid, $accessToken);
}

// Extract event times
$eventStart = isset($book_data['resource']['event_memberships'][0]['buffered_start_time'])
    ? date('Y-m-d H:i:s', strtotime($book_data['resource']['event_memberships'][0]['buffered_start_time']))
    : null;

$eventEnd = isset($book_data['resource']['event_memberships'][0]['buffered_end_time'])
    ? date('Y-m-d H:i:s', strtotime($book_data['resource']['event_memberships'][0]['buffered_end_time']))
    : null;

// Prepare SQL Insert
$sql = "INSERT INTO study_abroad_form 
    (name, email, phone, city, service, plan, calendly_event_uri, calendly_event_start, calendly_event_end)
    VALUES
    (:name, :email, :phone, :city, :service, :plan, :event_uri, :event_start, :event_end)";

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        ':name' => $formData['name'],
        ':email' => $formData['email'],
        ':phone' => $formData['phone'],
        ':city' => $formData['city'],
        ':service' => $formData['service'],
        ':plan' => $formData['plan'] ?? null,
        ':event_uri' => $eventUri,
        ':event_start' => $eventStart,
        ':event_end' => $eventEnd,
    ]);
    $admin_subject = "Eduedge | Appointment | Study Abroad";
    // $admin_message = "Hello Team ,<br ><br>

    //         Enquiry form has been filled by below user. <br />

    //         <br ><br >
    //         Name : " . $formData['name'] . " <br>
    //         Phone Number : " . $formData['phone'] . " <br>
    //         Email : " . $formData['email'] . " <br>
    //         City : " . $formData['city'] . " <br>
    //         Service : " . $formData['service'] . " <br>
    //         board : " . $formData['board'] . " <br>
    //         other_board : " . $formData['other_board'] . " <br>
    //         standard : " . $formData['standard'] . " <br>
    //         ug_stream : " . $formData['ug_stream'] . " <br>
    //         other_stream : " . $formData['other_stream'] . " <br>
    //         qualification : " . $formData['qualification'] . " <br>
    //         other_qualification : " . $formData['other_qualification'] . " <br>
    //         experience : " . $formData['experience'] . " <br>
    //         interest : " . $formData['interest'] . " <br>
    //         event_start : " . $eventStart . " <br>
    //         event_end : " . $eventEnd . " <br>
    //         <br><br><br>

    //         Thank you, <br>
    //         Eduedge";

    $admin_message = "Hello Team,<br><br>Enquiry form has been filled by below user.<br><br>";

    $fields = [
        'Name' => $formData['name'] ?? '',
        'Phone Number' => $formData['phone'] ?? '',
        'Email' => $formData['email'] ?? '',
        'City' => $formData['city'] ?? '',
        'Service' => $formData['service'] ?? '',
        'Plan' => $formData['plan'] ?? '',
        'Event Start' => $eventStart ?? '',
        'Event End' => $eventEnd ?? '',
    ];

    foreach ($fields as $label => $value) {
        if (trim($value) !== '') {
            $admin_message .= $label . " : " . htmlspecialchars($value) . " <br>";
        }
    }

    $admin_message .= "<br><br><br>Thank you,<br>Eduedge";


    sendMail($admin_email, $admin_subject, $admin_message);
    echo json_encode(['success' => true, 'message' => 'Appointment saved successfully']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database insert failed: ' . $e->getMessage()]);
}
?>
