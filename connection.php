<?php
$servername = "localhost";
$username = "root"; // MySQL username
$password = ""; // MySQL password (leave empty for default setup)
$dbname = "employee_management"; // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
