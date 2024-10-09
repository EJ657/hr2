<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <title>Human Resources 2</title>
</head>

<body class="custom-bg">


    <div class="flex">
        <!-- Sidebar -->
        <div class="fixed top-0 left-0 w-56 bg-[#fbfbfe] text-black border m-4 mr-0 rounded-lg overflow-hidden h-screen flex flex-col">
            <!-- Logo Section -->

            <!-- Header with Icon -->
            <div class="flex items-center justify-between px-5 mt-2">
                <p class='m-4 mb-4 font-bold text-2xl text-center text-[#00446b]'>NextFleet Dynamics</p>
            </div>

            <!-- Navigation Links -->
            <ul class="flex-grow mt-2 space-y-3 px-4">
                <li>
                    <a href="dashboard.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/dashboard.png" alt="Dashboard Icon">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="competency.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/competency.png" alt="Competency Icon">
                        <span>Competency Management</span>
                    </a>
                </li>
                <li>
                    <a href="learning.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/learningtraining.png" alt="Learning and Training Icon">
                        <span>Learning & Training Management</span>
                    </a>
                </li>
                <li>
                    <a href="feedbacks.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/feedback.png" alt="Feedback Icon">
                        <span>Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/logout.png" alt="Logout Icon">
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6 border-2 rounded-lg px-3 py-3">
                <div class="col-span-4">
                    <h2 class="text-4xl font-semibold text-gray-800">Learning and Training Management</h2>
                </div>
            </div>

            <!-- Category Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Module Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Training Module</h3>
                    <p class="text-gray-700 mb-6">Track modules.</p>
                    <a href="trainingmodule.php" class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-[#00446be8]">View Module</a>
                </div>

                <!-- Employees Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Employees</h3>
                    <p class="text-gray-700 mb-6">Manage employee information.</p>
                    <a href="employees.php" class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-[#00446be8]">View Employees</a>
                </div>

                <!-- Modules Card -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Training Module Management</h3>
                    <p class="text-gray-700 mb-6">Manage all Training Modules available in the system.</p>
                    <a href="trainingmodulemanagement.php" class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-[#00446be8]">View Training Module</a>
                
                
                </div>
            </div>
        </div>
    </div>
</body>

</html>