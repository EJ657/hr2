<?php
session_start();
include("connection.php"); // Database connection

// Check if an error message is stored in the session
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";

// Clear the error message after displaying it
unset($_SESSION['error_message']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query to find the user
    $stmt = $conn->prepare("SELECT password, usertype FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($storedPassword, $usertype);
        $stmt->fetch();

        if ($password === $storedPassword) {
            // Login successful, store user email and usertype in session
            $_SESSION['email'] = $email;
            $_SESSION['usertype'] = $usertype;  // Store the usertype in session
            
            // Redirect based on usertype
            if ($usertype == 'admin') {
                header("Location: dashboard.php"); // Admin dashboard
            } elseif ($usertype == 'employee') {
                header("Location: 2employeedashboard.php"); // Employee dashboard
            }
            exit();
        } else {
            // Set error message for invalid password
            $_SESSION['error_message'] = "Invalid password.";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "Email not found.";
        header("Location: index.php");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="./icons/nexfleet.svg">
    <title>Login</title>
</head>

<body>
    <div class="h-screen flex md:flex-row flex-col">
        <div class="lg:w-3/5 h-screen custom-py-1p lg:block hidden">
            <div class="bus-background bg-cover w-full h-full rounded-r-3xl"></div>
        </div>

        <div class="flex flex-col py-4 md:1/2 lg:w-2/5 w-full items-center">
            <p class="font-bold lg:text-4xl text-2xl w-full text-center text-[#00446b]">Bus Transportation Management System</p>
            <p class="font-semibold lg:text-3xl text-xl text-center mt-10 text-[#00446b]">Human Resources 2</p>

            <form class="xl:w-4/6 lg:w-5/6 sm:w-2/3 py-4 rounded-3xl shadow-lg shad mt-10 flex flex-col items-center border" id="loginForm" method="POST" action="index.php">
                <p class="text-center mb-4 text-xl text-[#00446b]">Login</p>
                <hr class="border w-full border-[#00446b]">

                <!-- Display error message if any -->
                <?php if (!empty($error_message)): ?>
                    <div class="text-red-500 text-center mb-4"><?php echo $error_message; ?></div>
                <?php endif; ?>

                <div class="mt-8 w-4/5">
                    <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="email" placeholder="Email" id="emailInput" name="email" required>
                </div>
                <div class="mt-4 w-4/5">
                    <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="password" placeholder="Password" id="passwordInput" name="password" required>
                </div>

                <div class="w-4/5 flex justify-between mt-4 lg:mb-12 mb-12">
                    <a class="text-sm hover:text-[#00446be1] hover:underline rounded-md text-[#00446b]" href="#" id="forgotPasswordLink">Forgot password?</a>
                </div>

                <div class="flex items-center mt-4 mb-8 w-4/5">
                    <button type="submit" class="w-full font-medium p-2 rounded-md border bg-[#00446b]" id="loginButton">
                        <p class="text-center text-white">Log In</p>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal for Password Reset Request -->
    <div id="forgotPasswordModal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-semibold text-center text-[#00446b]">Reset Your Password</h2>
            <form method="POST" action="forgot_password_request.php">
                <div class="mt-4">
                    <label for="resetEmail" class="block text-gray-700">Enter your email address:</label>
                    <input type="email" name="email" id="resetEmail" class="w-full p-2 mt-2 border rounded-md" required>
                </div>
                <div class="mt-4">
                    <label for="resetReason" class="block text-gray-700">Reason for password reset:</label>
                    <textarea name="reason" id="resetReason" class="w-full p-2 mt-2 border rounded-md h-24" required></textarea>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="px-6 py-2 bg-[#00446b] text-white rounded-md">Submit</button>
                </div>
            </form>
            <div class="mt-4 text-center">
                <button onclick="closeModal()" class="text-sm text-gray-500 hover:text-gray-700">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        // Show the reset password modal when the "Forgot password?" link is clicked
        document.getElementById('forgotPasswordLink').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('forgotPasswordModal').classList.remove('hidden');
        });

        // Close the modal
        function closeModal() {
            document.getElementById('forgotPasswordModal').classList.add('hidden');
        }
    </script>
</body>

</html>