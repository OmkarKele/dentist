<?php
$host = "localhost"; // Replace with your host
$user = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "dental_clinic"; // Replace with your database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
