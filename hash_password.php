<?php
include("connection.php");
include("employeeloginconnection.php");

$password = 'password123'; // This is the plain text password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo "Hashed Password: " . $hashedPassword;
?>
