<?php
require_once '../api/config.php';
$uploadDir = "../admin/uploads/";

if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo "Image upload error.";
    exit;
}

$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
$allowed = ['jpg', 'jpeg', 'png'];

if (!in_array($ext, $allowed)) {
    http_response_code(400);
    echo "Invalid file type.";
    exit;
}

if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
    http_response_code(400);
    echo "File is too large.";
    exit;
}

$filename = time() . '_' . uniqid() . '.' . $ext;
$target = $uploadDir . $filename;

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo $admin_url."uploads/" . $filename; // Path relative to HTML
} else {
    http_response_code(500);
    echo "Failed to move uploaded file.";
}
