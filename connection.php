<?php
$hostname = "localhost";
$username = "hr2_user"; // MySQL username
$password = "BOCi!-v!#KkoPP+y"; // MySQL password (leave empty for default setup)
$dbname = "hr2_db"; // Database name

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
