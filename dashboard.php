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

    <!-- Sidebar -->
    <div class="fixed top-0 left-0 w-56 bg-[#fbfbfe] text-black border m-4 mr-0 rounded-lg overflow-hidden h-screen flex flex-col shadow-lg">
        <!-- Logo Section -->
        <div class="flex flex-col h-full bg-base-200 p-4 space-y-4 overflow-y-auto scrollbar-hide">
            <!-- Header with Icon -->
            <div class="flex items-center justify-center mt-2 mb-4">
                <img class="w-10 h-10 mr-2" src="icons/nexfleet.svg" alt="NextFleet Logo">
                <p class="font-bold text-2xl text-center text-[#00446b]">NextFleet Dynamics</p>
            </div>

            <!-- Navigation Links -->
            <ul class="flex flex-col space-y-3">

                <!-- Dashboard Link -->
                <li>
                    <a href="dashboard.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/dashboard.png" alt="Dashboard Icon">
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Competency Management Link -->
                <li>
                    <a href="competency.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/competency.png" alt="Competency Icon">
                        <span>Competency Management</span>
                    </a>
                </li>

                <!-- Learning & Training Management -->
                <li>
                    <details class="group">
                        <summary class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white cursor-pointer">
                            <img class="w-5 h-5 mr-3" src="icons/learningtraining.png" alt="Learning and Training Icon">
                            <span>Learning & Training Management</span>
                        </summary>

                        <!-- Submenu -->
                        <ul class="p-2 space-y-2 pl-6">
                            <li class="flex items-center">
                                <img class="w-5 h-5 mr-3" src="icons/learningmodule.png" alt="Learning Module Icon">
                                <a href="trainingmodule.php" class="block py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                    Assign Module
                                </a>
                            </li>
                            <li class="flex items-center">
                                <img class="w-5 h-5 mr-3" src="icons/trainingemployeelist.png" alt="View Employees Icon">
                                <a href="employees.php" class="block py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                    View Employees
                                </a>
                            </li>
                            <li class="flex items-center">
                                <img class="w-5 h-5 mr-3" src="icons/learningmodulemanagement.png" alt="View Learning Modules Icon">
                                <a href="trainingmodulemanagement.php" class="block py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                    View Learning Modules
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>

                <!-- AI -->
                <li>
                    <a href="ai.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/ai.png" alt="Robot Icon">
                        <span>Automated Feedback Analysis</span>
                    </a>
                </li>

                <!-- Feedback Link -->
                <li>
                    <a href="feedbacks.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/feedback.png" alt="Feedback Icon">
                        <span>Review Request Feedback</span>
                    </a>
                </li>

                <!-- Logout Link -->
                <li>
                    <a href="logout.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white" onclick="return confirm('Are you sure you want to log out?');">
                        <img class="w-5 h-5 mr-3" src="icons/logout.png" alt="Logout Icon">
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6 border-2 rounded-lg px-3 py-3">
            <div class="col-span-4">
                <h2 class="text-4xl font-semibold text-gray-800">Employee Management Dashboard</h2>
            </div>
        </div>

        <!-- Key Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Metric 1: Total Active Modules -->
            <div class="bg-[#00446b] p-6 rounded-lg text-white shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                <h3 class="text-sm font-semibold opacity-90">Total Active Modules</h3>
                <p class="text-4xl font-bold text-white">10</p>
                <p class="mt-2 text-xs text-gray-200 opacity-70">Total active modules available in the system</p>
            </div>

            <!-- Metric 2: Total Participants -->
            <div class="bg-[#00446b] p-6 rounded-lg text-white shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                <h3 class="text-sm font-semibold opacity-90">Total Participants</h3>
                <p class="text-4xl font-bold text-white">30</p>
                <p class="mt-2 text-xs text-gray-200 opacity-70">Total number of registered participants</p>
            </div>

            <!-- Metric 3: Participants in Training Session -->
            <div class="bg-[#00446b] p-6 rounded-lg text-white shadow-lg hover:shadow-2xl transition-all transform hover:scale-105">
                <h3 class="text-sm font-semibold opacity-90">Participants in Training Session</h3>
                <p class="text-4xl font-bold text-white">20</p>
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
                        <td class="border p-2 font-semibold text-blue-600">75%</ </td>
                        <td class="border p-2"><span class="text-orange-500 font-semibold">In Progress</span></td>
                    </tr>
                    <tr class="hover:bg-gray-100 transition-colors">
                        <td class="border p-2">Aaron</td>
                        <td class="border p-2">Bus Department</td>
                        <td class="border p-2">Bus Repair & Maintenance Basics</td>
                        <td class="border p-2 font-semibold text-blue-600">100%</ </td>
                        <td class="border p-2"><span class="text-green-500 font-semibold">Completed</span></td>
                    </tr>
                    <tr class="hover:bg-gray-100 transition-colors">
                        <td class="border p-2">Christian</td>
                        <td class="border p-2">Customer Service</td>
                        <td class="border p-2">Customer Service Fundamentals</td>
                        <td class="border p-2 font-semibold text-blue-600">50%</ </td>
                        <td class="border p-2"><span class="text-orange-500 font-semibold">In Progress</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex flex-col md:flex-row gap-4 mb-6">
            <div class="bg-white shadow-xl rounded-lg p-6 mb-4 w-full md:w-1/3 text-sm transition-transform transform hover:scale-105 hover:shadow-2xl">
                <h3 class="text-lg font-semibold mb-6 text-[#00446b] border-b pb-2 border-gray-300">Training Hours vs. Target Participants</h3>
                <div class="flex flex-col space-y-6">

                    <!-- Bus Conductor -->
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col items-center mr-6 w-1/4">
                            <h4 class="text-center text-xs font-semibold text-gray-700">Bus Conductor</h4>
                            <div class="h-10 w-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold shadow-xl transition-transform transform hover:scale-110">
                                75%
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="relative h-2 bg-gray-300 rounded-full">
                                <div class="absolute top-0 left-0 h-2 bg-blue-600 rounded-full transition-all duration-300" style="width: 75%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Bus Driver -->
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col items-center mr-6 w-1/4">
                            <h4 class="text-center text-xs font-semibold text-gray-700">Bus Driver</h4>
                            <div class="h-10 w-10 flex items-center justify-center rounded-full bg-green-600 text-white font-bold shadow-xl transition-transform transform hover:scale-110">
                                100%
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="relative h-2 bg-gray-300 rounded-full">
                                <div class="absolute top-0 left-0 h-2 bg-green-600 rounded-full transition-all duration-300" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Bus Mechanic -->
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col items-center mr-6 w-1/4">
                            <h4 class="text-center text-xs font-semibold text-gray-700">Bus Mechanic</h4>
                            <div class="h-10 w-10 flex items-center justify-center rounded-full bg-red-600 text-white font-bold shadow-xl transition-transform transform hover:scale-110">
                                50%
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="relative h-2 bg-gray-300 rounded-full">
                                <div class="absolute top-0 left-0 h-2 bg-red-600 rounded-full transition-all duration-300" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Active Training Sessions -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-4 w-full md:w-1/3 text-sm transition-transform transform hover:scale-105">
                <h3 class="text-lg font-semibold mb-4 border-b pb-2 border-gray-300">Total Active Training Sessions</h3>
                <div class="space-y-4">
                    <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                        <span class="font-bold text-blue-600">1</span>
                        <span class="font-semibold text-gray-700">Defensive Driving Techniques</span>
                    </div>
                    <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                        <span class="font-bold text-blue-600">2</span>
                        <span class="font-semibold text-gray-700">Bus Repair & Maintenance Basics</span>
                    </div>
                    <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                        <span class="font-bold text-blue-600">3</span>
                        <span class="font-semibold text-gray-700">Financial Reporting and Analysis</span>
                    </div>
                    <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                        <span class="font-bold text-blue-600">4</span>
                        <span class="font-semibold text-gray-700">Customer Service Fundamentals</span>
                    </div>
                </div>
            </div>

            <!-- Participants by Department -->
            <div class="bg-white shadow-lg rounded-lg p-6 mb-4 w-full md:w-1/3 text-sm transition-transform transform hover:scale-105">
                <h3 class="text-sm font-semibold mb-2 border-b pb-1 border-gray-300">Participants by Department</h3>
                <table class="w-full table-auto text-xs">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="text-left p-1 border-b text-gray-600">Department</th>
                            <th class="text-left p-1 border-b text-gray-600">Participants</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-1">Bus Transportation</td>
                            <td class="border p-1">10</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-1">Bus Maintenance</td>
                            <td class="border p-1">10</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-1">Finance</td>
                            <td class="border p-1">10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

</body>

</html>