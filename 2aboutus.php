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
        <div class="card bg-white shadow-xl p-8 mt-14 left-2 rounded-lg w-full max-w-6xl border border-gray-300 mx-auto relative">
            <h1 class="text-4xl font-extrabold text-center border-b-4 pb-4 mb-6 text-blue-950">About Us</h1>
            <p class="mt-6 text-lg leading-relaxed text-gray-700">Welcome to HR2 Employee Management System, a key component of the Bus Transportation Management System. Our role is to ensure newly hired employees from HR1 are effectively onboarded, assigned to the right roles, and equipped with the necessary skills to excel.</p>
            <p class="mt-6 text-lg leading-relaxed text-gray-700">To support professional development, we provide structured training programs through online modules. Employees must first request access to a module through the Request Module section and wait for admin approval before proceeding to answer the training assessments via Google Forms. This process ensures a guided learning experience tailored to individual needs.</p>
            <p class="mt-6 text-lg leading-relaxed text-gray-700">At HR2, we are committed to enhancing workforce readiness, streamlining training, and fostering a well-prepared team that contributes to the safe and efficient operation of our transportation services.</p>

            <div class="mt-8 text-xl font-bold text-blue-950">HR2 Employee Management System – Building a Stronger Workforce for a Smoother Journey. 😊</div>
            <!-- if you want to add more content, you can add it here -->
        </div>
    </div>
</body>

</html>