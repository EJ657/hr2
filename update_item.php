<?php
// update_item.php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $hireDate = $_POST['hireDate'];
    $status = $_POST['status'];
    $jobPosition = $_POST['jobPosition'];
    $workExpertise = $_POST['workExpertise'];
    $technicalSkills = $_POST['technicalSkills'];

    $sql = "UPDATE employees 
            SET name='$name', department='$department', hire_date='$hireDate', status='$status', 
                job_position='$jobPosition', work_expertise='$workExpertise', technical_skills='$technicalSkills'
            WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Employee updated successfully"]);
    } else {
        echo json_encode(["error" => "Error updating record: " . $conn->error]);
    }

    $conn->close();
}
?>
