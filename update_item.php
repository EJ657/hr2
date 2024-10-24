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

    // Prepare the SQL statement
    $sql = "UPDATE employees 
            SET name=?, department=?, hire_date=?, status=?, 
                job_position=?, work_expertise=?, technical_skills=?
            WHERE id=?";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("sssssssi", $name, $department, $hireDate, $status, $jobPosition, $workExpertise, $technicalSkills, $id);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "Employee updated successfully"]);
        } else {
            echo json_encode(["success" => false, "message" => "Error updating record: " . $stmt->error]);
        }

        // Close the statement
        $stmt->close();
    } else {
        echo json_encode(["success" => false, "message" => "Error preparing statement: " . $conn->error]);
    }

    // Close the connection
    $conn->close();
}
?>
