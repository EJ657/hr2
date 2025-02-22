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
</head>

<body class="custom-bg">

    <div class="flex"></div>
    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Page Not Found -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6 flex-grow text-center transition-transform transform hover:shadow-xl">
            <h3 class="text-2xl font-semibold mb-4 text-red-600">404 - Page Not Found</h3>
            <p class="text-gray-700 mb-4">Sorry, the page you are looking for does not exist.</p>
            <a href="dashboard.php" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition-colors duration-300">Go to Dashboard</a>
        </div>
    </div>
</body>

</html>