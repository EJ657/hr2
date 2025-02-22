<?php
include("connection.php");
include("auth.php");
checkAuth();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./icons/nexfleet.svg">
    <title>Human Resources 2</title>
</head>

<body>
    <div class="flex"></div>
    <!-- Sidebar -->
    <div class="fixed top-0 left-0 w-56 bg-[#fbfbfe] text-black border m-4 mr-0 rounded-lg overflow-hidden h-screen flex flex-col shadow-lg">
        <!-- Logo Section -->
        <div class="flex flex-col h-full bg-base-200 p-4 space-y-4 overflow-y-auto scrollbar-hide">
            <!-- Header with Icon -->
            <div class="flex items-center justify-center mt-2 mb-4">
                <a href="dashboard.php" class="flex items-center">
                    <img class="w-10 h-10 mr-2" src="icons/nexfleet.svg" alt="NextFleet Logo">
                    <p class="font-bold text-2xl text-center text-[#00446b]">NextFleet Dynamics</p>
                </a>
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
                        <summary class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white cursor-pointer">
                            <div class="flex items-center">
                                <img class="w-5 h-5 mr-3" src="icons/learningtraining.png" alt="Learning and Training Icon">
                                <span>Learning & Training Management</span>
                            </div>
                            <svg class="w-5 h-5 transition-transform transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
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
                                <a href="viewlearningmodule.php" class="block py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                    View Learning Modules
                                </a>
                            </li>
                            <!-- AI -->
                            <li>
                                <a href="ai.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                    <img class="w-5 h-5 mr-3" src="icons/ai.png" alt="Robot Icon">
                                    <span>Automated Feedback Analysis</span>
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
                <li>
                    <!-- Others -->
                    <details class="group">
                        <summary class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white cursor-pointer">
                            <div class="flex items-center">
                                <img class="w-5 h-5 mr-3" src="icons/settings.png" alt="Settings Icon">
                                <span>Others</span>
                            </div>
                            <svg class="w-5 h-5 transition-transform transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>

                        <!-- Submenu -->
                        <ul class="p-2 space-y-2 pl-6">
                            <li class="flex items-center">
                                <!-- Message Integration Link -->
                                <a href="messages.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                    <img class="w-5 h-5 mr-3" src="icons/message.png" alt="Message Icon">
                                    <span>Messages</span>
                                </a>
                            </li>

                            <!-- Feedback Link -->
                            <li class="flex items-center">
                                <a href="feedbacks.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                    <img class="w-5 h-5 mr-3" src="icons/reviewrequestacc.png" alt="Feedback Icon">
                                    <span>Review Request Account</span>
                                </a>
                            </li>
                        </ul>
                    </details>
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
        <!-- Top Navigation Bar -->
        <div class="fixed top-0 left-64 right-0 z-10 bg-white shadow-md">
            <div class="flex justify-between items-center py-3 px-6 border-b-2">
                <div>
                    <h2 class="text-4xl font-semibold text-gray-800">Employee Management</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <!-- Notification Icon -->
                    <div class="relative">
                        <img src="icons/notif.png" alt="Notification Icon" class="w-6 h-6 cursor-pointer">
                    </div>
                    <!-- Profile Dropdown -->
                    <div class="relative">
                        <img id="profileIcon" src="icons/defaultprofile.png" alt="Profile Icon" class="w-8 h-8 cursor-pointer rounded-full" onclick="toggleProfileDropdown()">
                        <!-- Dropdown Menu -->
                        <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg">
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" onclick="openProfileModal()">
                                <img id="dropdownProfileIcon" src="icons/defaultprofile.png" alt="Profile Icon" class="inline w-5 h-5 mr-2 rounded-full">Profile
                            </a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100" onclick="openLogoutModal()">
                                <img src="icons/logout.png" alt="Logout Icon" class="inline w-5 h-5 mr-2">Log Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="mt-12">
            <!-- Module Request List Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-gray-700">Employee Module Requests</h3>
                </div>

                <!-- Module Request List Table -->
                <table class="min-w-full bg-white border border-gray-200" id="moduleRequestTable">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b">Employee Name</th>
                            <th class="py-3 px-4 border-b">Employee Email</th>
                            <th class="py-3 px-4 border-b">Module Name</th>
                            <th class="py-3 px-4 border-b">Request Date</th>
                            <th class="py-3 px-4 border-b">Status</th>
                            <th class="py-3 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="moduleRequestTableBody">
                        <!-- Dynamic content will be injected here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        let moduleRequests = [];

        const moduleRequestTableBody = document.getElementById('moduleRequestTableBody');

        // Fetch module requests from the database
        function fetchModuleRequests() {
            fetch('get_module_requests.php')
                .then(response => response.json())
                .then(data => {
                    moduleRequests = data;
                    renderModuleRequests();
                })
                .catch(error => console.error('Error fetching module requests:', error));
        }

        // Render module request list
        function renderModuleRequests() {
            moduleRequestTableBody.innerHTML = '';

            moduleRequests.forEach((request, index) => {
                const row = document.createElement('tr');
                row.innerHTML =
                    `<td class="py-3 px-4 border-b">${request.employee_name}</td>
                     <td class="py-3 px-4 border-b">${request.employee_email}</td>
                     <td class="py-3 px-4 border-b">${request.module_name}</td>
                     <td class="py-3 px-4 border-b">${request.request_date}</td>
                     <td class="py-3 px-4 border-b text-${request.status === 'approved' ? 'green-600' : request.status === 'rejected' ? 'red-600' : 'yellow-600'}">
                         ${request.status.charAt(0).toUpperCase() + request.status.slice(1)}
                     </td>
                     <td class="py-3 px-4 border-b">
                         <button class="text-green-600 hover:underline" onclick="approveRequest(${request.id})">Approve</button> |
                         <button class="text-red-600 hover:underline" onclick="rejectRequest(${request.id})">Reject</button>
                     </td>`;
                moduleRequestTableBody.appendChild(row);
            });
        }

        // Approve request function
        function approveRequest(requestId) {
            fetch('module_request_handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'approve',
                        id: requestId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        fetchModuleRequests();
                    } else {
                        alert('Error approving request: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Reject request function
        function rejectRequest(requestId) {
            fetch('module_request_handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'reject',
                        id: requestId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        fetchModuleRequests();
                    } else {
                        alert('Error rejecting request: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Initialize
        fetchModuleRequests();
    </script>
</body>

</html>