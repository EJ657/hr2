<?php
$hostname = "localhost";
$username = "hr2_user"; // MySQL username
$password = "BOCi!-v!#KkoPP+y"; // MySQL password
$dbname = "hr2_db"; // Database name

// Create connection using MySQLi object-oriented
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
