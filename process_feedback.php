<?php
include("connection.php");

if (isset($_POST['action']) && isset($_POST['request_id'])) {
    $request_id = $_POST['request_id'];
    $action = $_POST['action'];

    if ($action == 'approve') {
        $updateQuery = "UPDATE feedback_requests SET status='Approved' WHERE id=$request_id";
    } else if ($action == 'reject') {
        $updateQuery = "UPDATE feedback_requests SET status='Rejected' WHERE id=$request_id";
    }

    if (mysqli_query($conn, $updateQuery)) {
        // Redirect to feedback page with success message
        header("Location: feedbacks.php?status=success");
    } else {
        // Redirect to feedback page with error message
        header("Location: feedbacks.php?status=error");
    }
}
?>
