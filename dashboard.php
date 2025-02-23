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
        <div class="mt-2">

            <!-- Key Metrics -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 mt-16">
                <!-- Metric 1: Total Active Modules -->
                <div class="bg-gradient-to-r bg-[#00446b] p-6 rounded-lg text-white shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <h3 class="text-sm font-semibold opacity-90">Total Active Modules</h3>
                    <p class="text-4xl font-bold text-white">15</p>
                    <p class="mt-2 text-xs text-gray-200 opacity-70">Total active modules available in the system</p>
                </div>

                <!-- Metric 2: Total Participants -->
                <div class="bg-gradient-to-r bg-[#00446b] p-6 rounded-lg text-white shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <h3 class="text-sm font-semibold opacity-90">Total Participants</h3>
                    <p class="text-4xl font-bold text-white">1</p>
                    <p class="mt-2 text-xs text-gray-200 opacity-70">Total number of registered participants</p>
                </div>

                <!-- Metric 3: Participants in Training Session -->
                <div class="bg-gradient-to-r bg-[#00446b] p-6 rounded-lg text-white shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <h3 class="text-sm font-semibold opacity-90">Participants in Training Session</h3>
                    <p class="text-4xl font-bold text-white">1</p>
                    <p class="mt-2 text-xs text-gray-200 opacity-70">Number of participants currently in training</p>
                </div>
            </div>

            <!-- Training Topics and Employee Performance -->
            <div class="bg-white shadow-lg rounded-lg p-4 mb-4 flex-grow text-sm transition-transform transform hover:shadow-xl">
                <h3 class="text-lg font-semibold mb-4 border-b pb-1">Training Topics and Employee Performance</h3>
                <table class="w-full table-auto text-xs">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-3 border-b">Employee</th>
                            <th class="p-3 border-b">Department</th>
                            <th class="p-3 border-b">Training Program</th>
                            <th class="p-3 border-b">Performance</th>
                            <th class="p-3 border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-2">EJ</td>
                            <td class="border p-2">Bus Department</td>
                            <td class="border p-2">Defense Driving Technique</td>
                            <td class="border p-2 font-semibold text-blue-600">75%</td>
                            <td class="border p-2"><span class="text-orange-500 font-semibold">In Progress</span></td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-2">Aaron</td>
                            <td class="border p-2">Bus Department</td>
                            <td class="border p-2">Bus Repair & Maintenance Basics</td>
                            <td class="border p-2 font-semibold text-blue-600">100%</td>
                            <td class="border p-2"><span class="text-green-500 font-semibold">Completed</span></td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-2">Christian</td>
                            <td class="border p-2">Customer Service</td>
                            <td class="border p-2">Customer Service Fundamentals</td>
                            <td class="border p-2 font-semibold text-blue-600">50%</td>
                            <td class="border p-2"><span class="text-orange-500 font-semibold">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

</body>

</html>