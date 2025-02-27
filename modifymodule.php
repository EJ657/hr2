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
    <!-- Sidebar -->
    <?php include("sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
        <?php include("navbar.php"); ?>

        <!-- Content Section -->
        <div class="card bg-white shadow-xl p-8 mt-14 left-2 rounded-lg w-full max-w-6xl border border-gray-300 mx-auto relative">
            <!-- if you want to add more content, you can add it here -->
        </div>
    </div>
</body>

</html>