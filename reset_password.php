<?php
include("connection.php");
include("auth.php");

// Get the token from the URL
if (isset($_GET['token'])) {
    $reset_token = $_GET['token'];
    
    // Check if the reset token exists and is still valid
    $query = "SELECT * FROM users WHERE reset_token = ? AND reset_token_expires_at > NOW()";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $reset_token);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Token is valid, allow user to reset the password
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_password = $_POST['new_password'];
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT); // Hash the password
            
            // Update the user's password in the database
            $update_query = "UPDATE users SET password = ?, reset_token = NULL, reset_token_expires_at = NULL WHERE reset_token = ?";
            $stmt = $conn->prepare($update_query);
            $stmt->bind_param("ss", $hashed_password, $reset_token);
            $stmt->execute();
            
            echo "Your password has been successfully reset. You can now log in with your new password.";
        }
    } else {
        echo "Invalid or expired reset token.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./icons/nexfleet.svg">
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <div class="fixed top-0 left-0 w-56 bg-[#fbfbfe] text-black border m-4 mr-0 rounded-lg overflow-hidden h-screen flex flex-col">
            <div class="flex items-center justify-between px-5 mt-2">
                <p class='m-4 mb-4 font-bold text-2xl text-center text-[#00446b]'>NextFleet Dynamics</p>
            </div>
            <ul class="flex-grow mt-2 space-y-3 px-4">
                <li><a href="dashboard.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">Dashboard</a></li>
                <li><a href="competency.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">Competency Management</a></li>
                <li><a href="learning.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">Learning & Training Management</a></li>
                <li><a href="feedbacks.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">Feedback</a></li>
                <li><a href="logout.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6 border-2 rounded-lg px-3 py-3">
                <div class="col-span-4">
                    <h2 class="text-4xl font-semibold text-gray-800">Reset Password</h2>
                </div>
            </div>
            <form action="reset_password.php?token=<?php echo $_GET['token']; ?>" method="POST" class="max-w-md mx-auto">
                <div class="mb-4">
                    <label for="new_password" class="block text-lg font-medium text-gray-700">Enter your new password</label>
                    <input type="password" id="new_password" name="new_password" required class="mt-1 p-2 border border-gray-300 rounded w-full">
                </div>
                <button type="submit" class="btn btn-primary w-full mt-4">Reset Password</button>
            </form>
        </div>
    </div>
</body>
</html>
