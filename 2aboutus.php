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
    <?php include("5sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
        <?php include("5navbar.php"); ?>

        <!-- Content Section -->
        <div class="card bg-white shadow-xl p-16 mt-14 left-2 rounded-lg w-full max-w-6xl border border-gray-300 mx-auto relative">
            <a href="2employeedashboard.php" class="absolute bottom-4 right-4 bg-blue-950 text-white px-4 py-2 rounded hover:bg-blue-900">Go Back</a>
            <h1 class="text-2xl font-bold text-center border-b pb-4 mb-2 ">About Us</h1>
            <h2 class="text-xl font-semibold mt-6">Employee Management System</h2>
            <p class="mt-4"><span class="font-semibold">HR2:</span> To manage and assign newly hired employees.</p>

            <h3 class="mt-6 font-semibold">Group#47:</h3>
            <ul class="list-decimal list-inside pl-6 mt-2">
                <li>N/A</li>
                <li>N/A</li>
            </ul>

            <div class="mt-6"></div>
            <!-- if you want to add more content, you can add it here -->
        </div>
    </div>
</body>

</html>