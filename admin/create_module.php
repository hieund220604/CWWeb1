<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $module_name = $_POST['module_name'];

    // Insert the new module into the database
    $sql = 'INSERT INTO module (module_name, created_at) VALUES (:module_name, NOW())';
    query($conn, $sql, ['module_name' => $module_name]);

    // Redirect to the modules page
    header("Location: ../modules.php");
    exit();
}

$title = 'Create Module';
ob_start();
include './templates/create_module.html.php'; // You'll need to create this template
$output = ob_get_clean();

include './templates/layout.html.php';
?>
