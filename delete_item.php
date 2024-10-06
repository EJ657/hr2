<?php
// delete_item.php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM employees WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Employee deleted successfully"]);
    } else {
        echo json_encode(["error" => "Error deleting record: " . $conn->error]);
    }

    $conn->close();
}
?>
