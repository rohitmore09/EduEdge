<?php
// Setup database
$mysqli = new mysqli("localhost", "root", "", "db_eduedge");
if ($mysqli->connect_error) {
    http_response_code(500);
    exit("DB connection failed: " . $mysqli->connect_error);
}

// Step 1: Get raw POST body and headers
$rawBody = file_get_contents("php://input");
$headers = getallheaders();
$signatureHeader = $headers['Calendly-Webhook-Signature'] ?? '';

// Step 2: Verify the signature
$signingKey = 'gos7u6VTRF9p60ztWYAG-PtnARxS1Xp0Fv2QqXEoID0'; // Set your webhook signing key here
$expectedSignature = 'v1=' . hash_hmac('sha256', $rawBody, $signingKey);
if (!hash_equals($expectedSignature, $signatureHeader)) {
    http_response_code(403);
    exit('Invalid signature');
}

// Step 3: Decode JSON payload
$data = json_decode($rawBody, true);
if (!isset($data['event']) || $data['event'] !== 'invitee.created') {
    http_response_code(400);
    exit('Invalid event type');
}

// Step 4: Extract data
$payload = $data['payload'];
$name = $mysqli->real_escape_string($payload['invitee']['name']);
$email = $mysqli->real_escape_string($payload['invitee']['email']);
$start_time = date('Y-m-d H:i:s', strtotime($payload['invitee']['start_time']));
$end_time = date('Y-m-d H:i:s', strtotime($payload['invitee']['end_time']));
$event_type = $mysqli->real_escape_string($payload['event_type']['name']);
$timezone = $mysqli->real_escape_string($payload['invitee']['timezone']);

// Step 5: Insert into database
$query = "INSERT INTO bookings (name, email, start_time, end_time, event_type, timezone)
          VALUES ('$name', '$email', '$start_time', '$end_time', '$event_type', '$timezone')";
if ($mysqli->query($query)) {
    http_response_code(200);
    echo json_encode(['message' => 'Booking saved']);
} else {
    http_response_code(500);
    echo json_encode(['error' => $mysqli->error]);
}
?>
