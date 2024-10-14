<?php
include("connection.php");
session_start(); // Start the session

// Function to check if the user is authenticated
function checkAuth() {
    // Check if the 'email' session variable is set
    if (!isset($_SESSION['email'])) {
        header("Location: index.php"); // Redirect to the login page
        exit(); // Stop further script execution
    }
}

// Optional: Function to log out the user
function logout() {
    session_start(); // Start the session
    session_unset(); // Clear session variables
    session_destroy(); // Destroy the session
    header("Location: index.php"); // Redirect to the login page
    exit();
}
?>
