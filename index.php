<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <title>Human Resources 2</title>
    <style>
        .hidden {
            display: none;
        }

        .custom-dropdown-content {
            left: auto;
            right: 0;
        }

        .card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
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
                    <a href="index.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
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
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-[#fbfbfe] h-screen overflow-y-auto">
            <!-- Flex container for H2 and Date Picker -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>

                <!-- Date Picker Dropdown next to H2 -->
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-primary flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10m-9 4h10m-4 8h4m2-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h10z" />
                        </svg>
                        <span id="selectedDateText">Pick a Date</span>
                    </label>
                    <div tabindex="0" class="dropdown-content bg-white shadow-lg rounded-lg p-4 custom-dropdown-content">
                        <input type="date" class="input input-bordered w-full" id="datePicker" onchange="dateChanged()">
                    </div>
                </div>
            </div>

            <!-- Container -->
            <div class="container mx-auto p-6">
                <!-- Course Overview Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Active Courses Card -->
                    <div class="card bg-gradient-to-r from-blue-500 to-blue-600 p-5 rounded-lg shadow-lg text-white relative flex flex-col justify-between">
                        <h3 class="text-sm font-medium">Total Active Courses</h3>
                        <p class="text-4xl font-bold" id="activeCourses">0</p>
                    </div>
                    <!-- Total Participants Card -->
                    <div class="card bg-gradient-to-r from-yellow-400 to-yellow-500 p-5 rounded-lg shadow-lg text-white relative flex flex-col justify-between">
                        <h3 class="text-sm font-medium">Total Participants</h3>
                        <p class="text-4xl font-bold" id="totalParticipants">0</p>
                    </div>
                    <!-- Participants in Training Session -->
                    <div class="card bg-gradient-to-r from-green-500 to-green-600 p-5 rounded-lg shadow-lg text-white relative flex flex-col justify-between">
                        <h3 class="text-sm font-medium">Participants in Training Session</h3>
                        <p class="text-4xl font-bold" id="trainingParticipants">0</p>
                    </div>
                    <!-- Absentee Rate -->
                    <div class="card bg-gradient-to-r from-red-500 to-red-600 p-5 rounded-lg shadow-lg text-white relative flex flex-col justify-between">
                        <h3 class="text-sm font-medium">Absentee Rate</h3>
                        <p class="text-4xl font-bold" id="absenteeRate">0%</p>
                    </div>
                </div>
            </div>

            <script>
                // Handle date change and update values dynamically
                function dateChanged() {
                    const selectedDate = document.getElementById('datePicker').value;
                    const dateDisplay = document.getElementById('selectedDateText');
                    if (selectedDate) {
                        const formattedDate = new Date(selectedDate).toLocaleDateString();
                        dateDisplay.innerText = formattedDate;
                        console.log('Selected Date: ', selectedDate);

                        // Example of updating values dynamically - these values should come from backend
                        document.getElementById('activeCourses').innerText = 5;
                        document.getElementById('totalParticipants').innerText = 150;
                        document.getElementById('trainingParticipants').innerText = 75;
                        document.getElementById('absenteeRate').innerText = "10%";
                    }
                }
            </script>
        </div>
    </div>
</body>

</html>