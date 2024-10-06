<?php
include('connection.php'); // Database connection

$query = "SELECT * FROM employees";
$result = mysqli_query($conn, $query);
$employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($employees); // Output the result as JSON
?>
