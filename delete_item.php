<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];

    // Prepare the delete statement
    $stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i", $id); 

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Employee deleted successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error deleting record: " . $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
