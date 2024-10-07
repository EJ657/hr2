<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Human Resources 2</title>
    <style>
        .hidden {
            display: none;
        }

        .button-active {
            background-color: #3b82f6;
            color: white;
        }

        .button-inactive {
            background-color: #9ca3af;
            color: white;
        }
    </style>
</head>

<style>
    .custom-bg {
        background-color: #fbfbfe;
    }
</style>

<body class="custom-bg">


    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 border-r bg-blue-600 text-white h-screen flex flex-col">
            <!-- Logo Section -->
            <img class="w-32 mx-auto mt-4 object-contain" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="150" height="40">

            <!-- Header with Icon -->
            <div class="flex items-center justify-between px-5 mt-2">
                <h1 class="text-xl font-bold tracking-wide">Employee Management</h1>
                <img class="w-6 h-6" src="icons/employeemanagement.png" alt="Employee Management Icon">
            </div>

            <!-- Navigation Links -->
            <ul class="flex-grow mt-6 space-y-3 px-4">
                <li>
                    <a href="dashboard.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
                        <span>Dashboard</span>
                        <img class="w-5 h-5 ml-3" src="icons/dashboard.png" alt="Dashboard Icon">
                    </a>
                </li>
                <li>
                    <a href="competency.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
                        <span>Competency Management</span>
                        <img class="w-5 h-5 ml-3" src="icons/competency.png" alt="Competency Icon">
                    </a>
                </li>
                <li>
                    <a href="learning.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
                        <span>Learning & Training Management</span>
                        <img class="w-5 h-5 ml-3" src="icons/learningtraining.png" alt="Learning and Training Icon">
                    </a>
                </li>
                <li>
                    <a href="feedbacks.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
                        <span>Feedback</span>
                        <img class="w-5 h-5 ml-3" src="icons/feedback.png" alt="Feedback Icon">
                    </a>
                </li>
                <li>
                    <a href="index.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
                        <span>Logout</span>
                        <img class="w-5 h-5 ml-3" src="icons/logout.png" alt="Logout Icon">
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-[#fbfbfe] h-screen overflow-y-auto">
            <h2 class="text-2xl font-bold mb-4">Learning and Training Management</h2>

            <!-- Category Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Enrollment Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Enrollment</h3>
                    <p class="text-gray-700 mb-6">Track module enrollments.</p>
                    <a href="enrollment.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Enrollment</a>
                </div>

                <!-- Employees Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Employees</h3>
                    <p class="text-gray-700 mb-6">Manage employee information.</p>
                    <a href="employees.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Employees</a>
                </div>

                <!-- Modules Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Training Module</h3>
                    <p class="text-gray-700 mb-6">Manage all Training Modules available in the system.</p>
                    <a href="trainingmodule.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Training Module</a>
                
                
                </div>
            </div>
        </div>
    </div>
</body>

</html>