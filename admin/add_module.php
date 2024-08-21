<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

// Only allow access if the user is an admin
if ($_SESSION['role'] != 1) {
    header("Location: ../modules.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $module_name = $_POST['module_name'];

    // Insert the new module into the database
    $sql = 'INSERT INTO module (module_name, description) VALUES (:module_name , :description)';
    insert_data($conn, $sql, [':module_name' => $module_name , ':description' => $_POST['description']]);

    // Redirect to the modules page
    header("Location: ../modules.php");
    exit();
}

$title = 'Add Module';
ob_start();
include '../templates/add_module.html.php';
$output = ob_get_clean();
include '../templates/layout.html.php';
?>
