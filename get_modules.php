<?php
include 'connection.php';
include 'auth.php';
checkAuth();

$query = "SELECT id, name, category, status, due_date, progress FROM modules";
$result = $conn->query($query);

$modules = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $modules[] = $row;
    }
    echo json_encode($modules);
} else {
    echo json_encode([]);
}

$conn->close();
?>
