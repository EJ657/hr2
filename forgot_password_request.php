<?php
session_start();
include("connection.php"); // Database connection

// Check if an error message or success message is stored in the session
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
$success_message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : "";

// Clear messages after displaying them
unset($_SESSION['error_message']);
unset($_SESSION['success_message']);

// Processing the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $reason = $_POST['reason']; // Capture reason for the reset request

    // Check if the email exists in the users table
    $stmt = $conn->prepare("SELECT id, email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email exists, generate a password reset token
        $reset_token = bin2hex(random_bytes(16));  // Generate a random reset token
        $stmt->bind_result($user_id, $user_email);
        $stmt->fetch();

        // Set reset token expiry time to 1 hour from now
        $reset_token_expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Update the users table with the reset token and expiry time
        $update_stmt = $conn->prepare("UPDATE users SET reset_token = ?, reset_token_expiry = ? WHERE id = ?");
        $update_stmt->bind_param("ssi", $reset_token, $reset_token_expiry, $user_id);
        $update_stmt->execute();

        // Insert the reason for reset request into the users table
        $feedback_query = $conn->prepare("UPDATE users SET reset_request_reason = ? WHERE id = ?");
        $feedback_query->bind_param("si", $reason, $user_id); // Store the reason for reset
        $feedback_query->execute();

        // Success message after saving request data
        $_SESSION['success_message'] = "A password reset request has been submitted.";

        // Redirect to feedbacks.php after submitting
        header("Location: feedbacks.php");
        exit();
    } else {
        $_SESSION['error_message'] = "The email address does not exist in our system.";
    }

    // Redirect to avoid form resubmission
    header("Location: forgot_password_request.php");
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/global.css">
    <title>Forgot Password Request</title>
</head>

<body>
    <div class="h-screen flex md:flex-row flex-col">
        <div class="lg:w-3/5 h-screen custom-py-1p lg:block hidden">
            <div class="bus-background bg-cover w-full h-full rounded-r-3xl"></div>
        </div>

        <div class="flex flex-col py-4 md:1/2 lg:w-2/5 w-full items-center">
            <p class="font-bold lg:text-4xl text-2xl w-full text-center text-[#00446b]">Bus Transportation Management System</p>
            <p class="font-semibold lg:text-3xl text-xl text-center mt-10 text-[#00446b]">Human Resources 2</p>

            <form class="xl:w-4/6 lg:w-5/6 sm:w-2/3 py-4 rounded-3xl shadow-lg shad mt-10 flex flex-col items-center border" id="forgotPasswordForm" method="POST" action="forgot_password_request.php">
                <p class="text-center mb-4 text-xl text-[#00446b]">Enter your email and the reason of your request</p>
                <hr class="border w-full border-[#00446b]">

                <!-- Display error message if any -->
                <?php if (!empty($error_message)): ?>
                    <div class="text-red-500 text-center mb-4"><?php echo $error_message; ?></div>
                <?php endif; ?>

                <!-- Display success message if any -->
                <?php if (!empty($success_message)): ?>
                    <div class="text-green-500 text-center mb-4"><?php echo $success_message; ?></div>
                <?php endif; ?>

                <div class="mt-8 w-4/5">
                    <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="email" placeholder="Email" id="emailInput" name="email" required>
                </div>

                <!-- Reason Input Field -->
                <div class="mt-8 w-4/5">
                    <textarea class="mt-1 block w-full bg-transparent rounded-md border p-2" placeholder="Please provide a reason for the password reset request" id="reasonInput" name="reason" required></textarea>
                </div>

                <div class="flex items-center mt-4 mb-8 w-4/5">
                    <button type="submit" class="w-full font-medium p-2 rounded-md border bg-[#00446b]" id="forgotPasswordButton">
                        <p class="text-center text-white">Submit</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>