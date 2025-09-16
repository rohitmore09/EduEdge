<?php

// ini_set('display_errors', 1);

// ini_set('display_startup_errors', 1);

// error_reporting(E_ALL);

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $servername = "localhost";
    $username = "eduadmin";
    $password = 'Edu@dmin414415#';
    $dbname = "db_eduedge";
    $base_url = "https://eduedgepro.com/";
    $admin_url = "https://eduedgepro.com/admin/";
    $environment = 'localhost';

} else {

    $servername = "139.162.32.211";
    $username = "eduedge_user";
    $password = 'Edu@dmin414415#';
    $dbname = "eduedgepro_web";
    $base_url = "https://eduedgepro.com/";
    $admin_url = "https://eduedgepro.com/admin/";
    $environment = 'server';
}



// Create connection

date_default_timezone_set('Asia/Kolkata');



$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

	// die("Connection failed: " . $conn->connect_error);

	die("Connection failed: ");

}


function inputClean($data)

{

    $data = htmlspecialchars($data);

    $data = stripslashes($data);

    $data = trim($data);

    return $data;

}


$admin_list = array(

    'info@eduedgepro.com' =>['password' => 'eduedge@123',],

);
