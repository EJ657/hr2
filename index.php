<?php
include("connection.php"); // Include your connection file

// Check if the connection was successful and echo the message
if (isset($success_message)) {
    echo "<p>$success_message</p>";
}
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">
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

            <form class="xl:w-4/6 lg:w-5/6 sm:w-2/3 py-4 rounded-3xl shadow-lg shad mt-10 flex flex-col items-center border" id="loginForm" method="POST" action="account.php">
                <p class="text-center mb-4 text-xl text-[#00446b]">Sign In</p>
                <hr class="border w-full border-[#00446b]">

                <div class="mt-8 w-4/5">
                    <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="email" placeholder="Email" id="emailInput" name="email" required>
                </div>
                <div class="mt-4 w-4/5">
                    <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="password" placeholder="Password" id="passwordInput" name="password" required>
                </div>

                <div class="w-4/5 flex justify-between mt-4 lg:mb-12 mb-12">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" id="rememberMeCheckbox" />
                        <span class="text-sm hover:text-[#00446b] rounded-md text-[#00446b] cursor-pointer" id="rememberMeLabel">
                            <a href="#" class="hover:underline">Remember me</a>
                        </span>
                    </label>
                    <a class="text-sm hover:text-[#00446be1] rounded-md text-[#00446b]" href="#" id="forgotPasswordLink">Forgot your password?</a>
                </div>

                <div class="flex items-center mt-4 mb-8 w-4/5">
                    <button type="submit" class="w-full font-medium p-2 rounded-md border bg-[#00446b]" id="loginButton">
                        <p class="text-center text-white">Log In</p>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Function to handle form submission
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            const email = document.getElementById('emailInput').value;
            const password = document.getElementById('passwordInput').value;

            // Check if email and password match the hardcoded values
            if (email === "" || password === "") {
                alert("Please enter both email and password.");
            } else if (email === "ejdelosreyes@gmail.com" && password === "password123") {
                // If email and password are correct, redirect to index.php
                window.location.href = "dashboard.php";
            } else {
                // If incorrect, show an error
                alert("Incorrect email or password.");
            }
        });

        // Toggle checkbox when "Remember me" is clicked
        document.getElementById('rememberMeLabel').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            const checkbox = document.getElementById('rememberMeCheckbox');
            checkbox.checked = !checkbox.checked; // Toggle the checkbox state

            // Trigger the change event manually to log the state
            checkbox.dispatchEvent(new Event('change'));
        });

        // Function to handle "Forgot your password?" link
        document.getElementById('forgotPasswordLink').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior
            alert("Password recovery is currently not available. Please contact support.");
        });
    </script>
</body>

</html>