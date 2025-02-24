<?php
include("connection.php");
include("auth.php"); // Include the authentication file
checkAuth(); // Call the function to check if user is authenticated
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./icons/nexfleet.svg">
    <title>Human Resources 2</title>
    <style>
        .custom-bg {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-section {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="custom-bg">
    <!-- Sidebar -->
    <?php include("5sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64 content-section">
        <!-- Top Navigation Bar -->
        <?php include("5navbar.php"); ?>

        <!-- Content Section -->
        <div class="bg-white p-8 mt-12 rounded-lg shadow-xl w-full">
            <h1 class="text-3xl font-semibold text-center text-blue-950 mb-6">Employee Request Form</h1>

            <form action="submit_request.php" method="POST" class="space-y-6">

            <!-- Employee Name Field -->
            <div class="flex flex-col">
                <label for="employee_email" class="text-lg font-medium text-blue-950 mb-2">Your Email</label>
                <input type="email" id="employee_email" name="employee_email" placeholder="Enter your email address"
                class="w-full px-4 py-3 border border-blue-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 transition duration-200" required>
            </div>

            <!-- Request Module Field -->
            <div class="flex flex-col">
                <label for="request_module" class="text-lg font-medium text-blue-950 mb-2">Request Module</label>
                <input type="text" id="request_module" name="request_module" placeholder="Enter the module of your request"
                class="w-full px-4 py-3 border border-blue-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 transition duration-200" required>
            </div>

            <!-- Request Date Field -->
            <div class="flex flex-col">
                <label for="request_date" class="text-lg font-medium text-blue-950 mb-2">Date</label>
                <input type="date" id="request_date" name="request_date"
                class="w-full px-4 py-3 border border-blue-950 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 transition duration-200" required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="w-full bg-blue-950 text-white py-3 rounded-lg text-lg font-semibold hover:bg-blue-900 transition duration-300">Submit Request</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>