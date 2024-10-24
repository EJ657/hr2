<?php
include('connection.php');

// Retrieve POST data with default values
$name = $_POST['name'] ?? '';
$hireDate = $_POST['hireDate'] ?? '';
$status = $_POST['status'] ?? '';
$department = $_POST['department'] ?? '';
$jobPosition = $_POST['jobPosition'] ?? '';
$workExpertise = $_POST['workExpertise'] ?? '';
$technicalSkills = $_POST['technicalSkills'] ?? '';

if ($name && $hireDate && $status) {
    // Prepare the insert statement
    $stmt = $conn->prepare("INSERT INTO employees (name, department, hire_date, status, job_position, work_expertise, technical_skills) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sssssss", $name, $department, $hireDate, $status, $jobPosition, $workExpertise, $technicalSkills);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";

        header('Location: competency.php');
        exit(); // Always call exit after header redirection
    } else {
        echo "Error: " . $stmt->error; // Use prepared statement error
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Please fill in all required fields.";
}

// Close the database connection
$conn->close();
