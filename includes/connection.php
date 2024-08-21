<?php 

$host = 'localhost';
$dbname = 'hieu_cw';
$username = 'root';
$passwd = '';

$conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $passwd);
$output = 'CONNECTION SUCCESSFULLY!';

?>