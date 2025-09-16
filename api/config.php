<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
	// error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');

if (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'localhost') {
    $servername = "localhost";
    $username = "eduadmin";
    $password = 'Edu@dmin414415#';
    $dbname = "db_eduedge";
} else {
    $servername = "139.162.32.211";
    $username = "eduedge_user";
    $password = 'Edu@dmin414415#';
    $dbname = "eduedgepro_web";
}

$charset = 'utf8mb4';
$dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$admin_email = 'vaidehi@eduedgepro.com';
// $site_key = "6LcHjjYrAAAAAEGIyQv-5rHs11dqVJxIbGk_bZTe";
// $recaptcha_secret = "6LcHjjYrAAAAABohuUVO0wgKW8c8_pLlJKer9zuJ";

function sendMail($toEmail,$subject,$message,$file='',$cc='',$bcc=''){
  require_once('/var/www/html/ftpupload/PHPMailer/PHPMailerAutoload.php');
    


  $mail = new PHPMailer;
  $mail->isMail();        
  $mail->IsSMTP();        
  // $mail->SMTPDebug  = 3;      
  // $mail->Debugoutput = 'html';   

  
  $mail->Host = 'smtp.gmail.com';               
  $mail->SMTPAuth = true;                              
  $mail->Username = 'info@eduedgepro.com';                
  $mail->Password = 'salmjloxjyjibcpc';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';

  $mail->From = 'info@eduedgepro.com'; 
  $mail->FromName = 'Eduedge';
  $mail->AddAddress($toEmail);

  if($cc){
    $mail->AddCC($cc);
  }
  
  if($bcc){
    $mail->AddBcc($bcc);
  }

  $mail->IsHTML(true);

  // if($env == 'test'){
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
  // }

  $mail->Subject = $subject;
  $mail->Body    = $message;

  if($file){
    $mail->addAttachment($file); 
  }
  $a = $mail->Send();
  // print_r($a);
}

function d($data){
  echo "<pre>";
  print_r($data);
  echo "</pre>";
}
function dd($data){
  echo "<pre>";
  print_r($data);
  echo "</pre>";
  die();
}

function sendResponse($status,$message,$data=''){
  $arr = array('status' => $status, 'message' => $message, 'data' => $data);
  echo json_encode($arr);
  die;
}


function validateRecaptcha($token){
  GLOBAL $site_key;
  GLOBAL $recaptcha_secret;
      //validate google recaptcha
      $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
      $recaptcha_response = $token;
      
      // Make and decode POST request:
      $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
      $recaptcha = json_decode($recaptcha);
      
      
      // Take action based on the score returned:
      if ($recaptcha->success != true || $recaptcha->success != 1) {
          return false;
      }else{
        return true;
      }
}

?>
