<?php
$title = 'Edit Module';
session_start();

include '../includes/connection.php';;
include '../includes/functions.php'; ;

// Only admins can access this page
if ($_SESSION['role'] != 1) {
    header('Location: ../modules.php');
    exit();
}

// Check if the module ID is set and valid
if (!isset($_GET['id'])) {
    header('Location: ../modules.php');
    exit();
}

$module_id = $_GET['id'];

// Fetch the module details
$sql = 'SELECT * FROM module WHERE module_id = :module_id';
$module = query($conn, $sql, [':module_id' => $module_id])->fetch(PDO::FETCH_ASSOC);

if (!$module) {
    header('Location: ../modules.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $module_name = $_POST['module_name'];
    $description = $_POST['description'];

    $sql = 'UPDATE module SET module_name = :module_name, description = :description WHERE module_id = :module_id';
    $params = [
        ':module_name' => $module_name,
        ':description' => $description,
        ':module_id' => $module_id,
    ];

    insert_data($conn, $sql, $params);

    header('Location: ../modules.php');
    exit();
}
ob_start();
include '../templates/edit_module.html.php';
$output = ob_get_clean();
include '../templates/layout.html.php';

?>