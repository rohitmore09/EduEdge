<?php
session_start();
require_once '../api/config.php';

if (!isset($_SESSION['nj_admin'])) {
    header('Location: ' . rtrim($admin_url, '/') . '/login.php');
    exit;
}
?>