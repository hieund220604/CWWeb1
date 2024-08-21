<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: ../login.php");
    exit();
}

// Get the user ID from the URL
$user_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Prevent admin from deleting themselves
if ($_SESSION['user_id'] == $user_id) {
    header("Location: ../users.php?error=cannot_delete_self");
    exit();
}

// Delete the user from the database
$sql = 'DELETE FROM account WHERE user_id = :user_id';
query($conn, $sql, ['user_id' => $user_id]);

// Redirect to the users page
header("Location: ../users.php");
exit();
