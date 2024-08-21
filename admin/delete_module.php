<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: ../login.php");
    exit();
}

// Get the module ID from the URL
$module_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Delete the module from the database
$sql = 'DELETE FROM module WHERE module_id = :module_id';
query($conn, $sql, ['module_id' => $module_id]);

// Redirect to the modules page
header("Location: ../modules.php");
exit();
?>
