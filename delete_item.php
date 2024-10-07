<?php
// delete_item.php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM employees WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(["success" => true, "message" => "Employee deleted successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error deleting record: " . $conn->error]);
    }

    $conn->close();
}
?>
