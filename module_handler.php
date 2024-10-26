<?php
include 'connection.php';
include 'auth.php';
checkAuth();

$action = $_POST['action'] ?? '';

if ($action === 'add') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $due_date = $_POST['due_date'];
    $progress = $_POST['progress'];

    $stmt = $conn->prepare("INSERT INTO modules (name, category, status, due_date, progress) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $category, $status, $due_date, $progress);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'id' => $conn->insert_id]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to add module']);
    }
    $stmt->close();
    exit; 
}

if ($action === 'edit') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $due_date = $_POST['due_date'];
    $progress = $_POST['progress'];

    $stmt = $conn->prepare("UPDATE modules SET name=?, category=?, status=?, due_date=?, progress=? WHERE id=?");
    $stmt->bind_param("ssssii", $name, $category, $status, $due_date, $progress, $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to edit module']);
    }
    $stmt->close();
    exit; 
}

if ($action === 'delete') {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM modules WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Module deleted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete module']);
    }
    $stmt->close();
    exit; 
}

echo json_encode(['success' => false, 'message' => 'Invalid action']);
?>
