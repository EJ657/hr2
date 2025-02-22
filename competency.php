<?php
include('connection.php');
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

<body">
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
    <d class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
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
                    <script>
                        // Toggle profile dropdown visibility
                        function toggleProfileDropdown() {
                            const dropdown = document.getElementById('profileDropdown');
                            dropdown.classList.toggle('hidden');
                        }

                        // Close the dropdown if clicked outside
                        window.onclick = function(event) {
                            if (!event.target.matches('.cursor-pointer')) {
                                const dropdowns = document.getElementsByClassName("relative");
                                for (let i = 0; i < dropdowns.length; i++) {
                                    const openDropdown = dropdowns[i].querySelector('.absolute');
                                    if (openDropdown && !openDropdown.classList.contains('hidden')) {
                                        openDropdown.classList.add('hidden');
                                    }
                                }
                            }
                        }

                        // Open profile modal
                        function openProfileModal() {
                            document.getElementById('profileModal').classList.remove('hidden');
                        }

                        // Close profile modal
                        function closeProfileModal() {
                            document.getElementById('profileModal').classList.add('hidden');
                        }

                        // Load profile details
                        function loadProfileDetails() {
                            const image = localStorage.getItem('profileImage');
                            if (image) {
                                document.getElementById('profileImage').value = image;
                                document.getElementById('profileIcon').src = 'icons/' + image;
                                document.getElementById('dropdownProfileIcon').src = 'icons/' + image;
                            }
                        }

                        // Save profile details
                        function saveProfileDetails() {
                            const image = document.getElementById('profileImage').value;
                            localStorage.setItem('profileImage', image);
                            document.getElementById('profileIcon').src = 'icons/' + image;
                            document.getElementById('dropdownProfileIcon').src = 'icons/' + image;
                            closeProfileModal();
                        }

                        // Open logout modal
                        function openLogoutModal() {
                            document.getElementById('logoutModal').classList.remove('hidden');
                        }

                        // Close logout modal
                        function closeLogoutModal() {
                            document.getElementById('logoutModal').classList.add('hidden');
                        }

                        // Close modal if clicked outside
                        window.onclick = function(event) {
                            const profileModal = document.getElementById('profileModal');
                            const logoutModal = document.getElementById('logoutModal');
                            if (event.target == profileModal) {
                                closeProfileModal();
                            }
                            if (event.target == logoutModal) {
                                closeLogoutModal();
                            }
                        }

                        // Load profile details on page load
                        window.onload = function() {
                            loadProfileDetails();
                        }
                    </script>
                </div>

                <!-- Profile Modal -->
                <div id="profileModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Profile Details</h2>
                        <div class="mb-4">
                            <label for="profileImage" class="block text-gray-700">Profile Image</label>
                            <select id="profileImage" class="w-full border rounded px-3 py-2">
                                <option value="defaultprofile.png">Default</option>
                                <option value="mblack.png">Male 1</option>
                                <option value="myellow.png">Male 2</option>
                                <option value="gblack.png">Female 1</option>
                                <option value="gyellow.png">Female 2</option>
                                <option value="dog.png">Dog</option>
                                <option value="cat.png">Cat</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="profileName" class="block text-gray-700">Name</label>
                            <input type="text" id="profileName" class="w-full border rounded px-3 py-2 bg-gray-100" placeholder="Admin" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="profileEmail" class="block text-gray-700">Email</label>
                            <input type="email" id="profileEmail" class="w-full border rounded px-3 py-2" value="admin@gmail.com" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="profileRole" class="block text-gray-700">Role</label>
                            <input type="text" id="profileRole" class="w-full border rounded px-3 py-2" value="admin" disabled>
                        </div>
                        <div class="flex justify-end">
                            <button onclick="saveProfileDetails()" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
                        </div>
                    </div>
                </div>

                <!-- Logout Modal -->
                <div id="logoutModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Log Out</h2>
                        <p class="mb-4">Are you sure you want to log out?</p>
                        <div class="flex justify-end space-x-4">
                            <button onclick="closeLogoutModal()" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700">Cancel</button>
                            <a href="logout.php" class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-blue-700">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="mt-20">

            <script>
                // Toggle profile dropdown visibility
                function toggleProfileDropdown() {
                    const dropdown = document.getElementById('profileDropdown');
                    dropdown.classList.toggle('hidden');
                }

                // Close the dropdown if clicked outside
                window.onclick = function(event) {
                    if (!event.target.matches('.cursor-pointer')) {
                        const dropdowns = document.getElementsByClassName("relative");
                        for (let i = 0; i < dropdowns.length; i++) {
                            const openDropdown = dropdowns[i].querySelector('.absolute');
                            if (openDropdown && !openDropdown.classList.contains('hidden')) {
                                openDropdown.classList.add('hidden');
                            }
                        }
                    }
                }
            </script>

            <!-- Search and Filter Section -->
            <div class="flex items-center mb-6">
                <input type="text" id="searchBar" oninput="filterItems()" placeholder="Search..."
                    class="p-3 border border-gray-300 rounded-lg shadow-sm flex-1 mr-4 focus:ring focus:ring-[#00446b] focus:border-[#00446b] transition duration-200" />

                <!-- Active Button -->
                <button id="activeButton" onclick="toggleStatus('active')"
                    class="bg-[#00446b] text-white p-3 rounded-lg hover:bg-gray-600 transition duration-300 focus:ring focus:ring-gray-200">
                    Active
                </button>

                <!-- Inactive Button -->
                <button id="inactiveButton" onclick="toggleStatus('inactive')"
                    class="bg-[#00446b] text-white p-3 rounded-lg hover:bg-gray-600 transition duration-300 ml-4 focus:ring focus:ring-gray-200">
                    Inactive
                </button>

                <!-- Show All Button -->
                <button id="showAllButton" onclick="toggleStatus('all')"
                    class="bg-[#00446b] text-white p-3 rounded-lg hover:bg-gray-600 transition duration-300 ml-4 focus:ring focus:ring-gray-200">
                    Show All
                </button>
            </div>

            <!-- Form to Add Item -->
            <form action="add_item.php" method="POST" id="crudForm" class="mb-8 p-6 bg-white rounded-lg shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" id="name" placeholder="Name" name="name"
                            class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b]" required minlength="2" maxlength="25" />
                    </div>

                    <div>
                        <label for="hireDate" class="block text-sm font-medium text-gray-700 mb-1">Hire Date</label>
                        <input type="date" id="hireDate" name="hireDate"
                            class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required />
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status" name="status" class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div>
                        <label for="jobPosition" class="block text-sm font-medium text-gray-700 mb-1">Job Position</label>
                        <select id="jobPosition" name="jobPosition" class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required>
                            <option value="">Select Job Position</option>
                            <option value="Operations Manager">Operations Manager</option>
                            <option value="Transportation Supervisor">Transportation Supervisor</option>
                            <option value="Fleet Manager">Fleet Manager</option>
                            <option value="Route Planner">Route Planner</option>
                            <option value="Safety and Compliance Manager">Safety and Compliance Manager</option>
                            <option value="Customer Service Manager">Customer Service Manager</option>
                            <option value="Bus Driver">Bus Driver</option>
                            <option value="Bus Conductor">Bus Conductor</option>
                            <option value="Bus Maintenance Mechanic">Bus Maintenance Mechanic</option>
                            <option value="Customer Service">Customer Service</option>

                        </select>
                    </div>

                    <div>
                        <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select id="department" name="department" class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required>
                            <option value="">Select Department</option>
                            <option value="Operations Department">Bus Transportation Department</option>
                            <option value="Operations Department">Operations Department</option>
                            <option value="Maintenance Department">Maintenance Department</option>
                            <option value="Safety and Compliance Department">Safety and Compliance Department</option>
                            <option value="Customer Service Department">Customer Service Department</option>
                            <option value="Human Resources Department">Human Resources Department</option>
                            <option value="Finance Department">Finance Department</option>
                        </select>
                    </div>

                    <div>
                        <label for="workExpertise" class="block text-sm font-medium text-gray-700 mb-1">Soft Skills</label>
                        <input type="text" id="workExpertise" name="workExpertise" placeholder="Ex. Communication, Adaptability, Problem-Solving"
                            class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="15" />
                    </div>

                    <div>
                        <label for="technicalSkills" class="block text-sm font-medium text-gray-700 mb-1">Technical Skills(Hard Skills)</label>
                        <input type="text" id="technicalSkills" name="technicalSkills" placeholder="Ex. Route Planning, Safety Protocols, Vehicle Maintenance"
                            class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="15" />
                    </div>

                    <button type="submit"
                        class="col-span-2 bg-[#00446b] text-white p-3 rounded-lg bg-[#00446bec] transition duration-300 focus:ring focus:ring-[#00446b]">
                        Add Employee
                    </button>
                </div>
            </form>

            <!-- Table to Display Items -->
            <div class="overflow-x-auto bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4 text-gray-800">Employee List</h3>
                <table class="min-w-full bg-white border border-gray-300">
                    <colgroup>
                        <col span="1" style="width: 10%;"> <!-- Name -->
                        <col span="1" style="width: 12%;"> <!-- Department -->
                        <col span="1" style="width: 12%;"> <!-- Request -->
                        <col span="1" style="width: 18%;"> <!-- Hire Date  -->
                        <col span="1" style="width: 10%;"> <!-- Status -->
                        <col span="1" style="width: 12%;"> <!-- Job Position -->
                        <col span="1" style="width: 12%;"> <!-- Soft Skill -->
                        <col span=<col span="1" style="width: 10%;"> <!-- Actions -->
                    </colgroup>
                    <thead class="bg-gray-200 font-medium text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b text-left">Name</th>
                            <th class="py-3 px-4 border-b text-left">Department</th>
                            <th class="py-3 px-4 border-b text-left">Request</th>
                            <th class="py-3 px-4 border-b text-left">Hire Date</th>
                            <th class="py-3 px-4 border-b text-left">Status</th>
                            <th class="py-3 px-4 border-b text-left">Job Position</th>
                            <th class="py-3 px-4 border-b text-left">Soft Skills</th>
                            <th class="py-3 px-4 border-b text-left">Technical Skills</th>
                            <th class="py-3 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="itemTableBody">
                        <!-- Dynamic content will be injected here -->
                    </tbody>

                </table>
            </div>

            <!-- Edit Item Modal -->
            <div id="editModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full">
                    <h2 class="text-xl font-bold mb-4">Edit Employee</h2>
                    <form id="editForm" onsubmit="updateItem(event)">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="editName" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="editName" name="editName" placeholder="Name" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="25" />
                            </div>
                            <div>
                                <label for="editHireDate" class="block text-sm font-medium text-gray-700 mb-1">Hire Date</label>
                                <input type="date" id="editHireDate" name="editHireDate" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required />
                            </div>
                            <div>
                                <label for="editStatus" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <select id="editStatus" name="editStatus" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div>
                                <label for="editJobPosition" class="block text-sm font-medium text-gray-700 mb-1">Job Position</label>
                                <select id="editJobPosition" name="editJobPosition" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]">
                                    <option value="">Select Job Position</option>
                                    <option value="Operations Manager">Operations Manager</option>
                                    <option value="Transportation Supervisor">Transportation Supervisor</option>
                                    <option value="Fleet Manager">Fleet Manager</option>
                                    <option value="Route Planner">Route Planner</option>
                                    <option value="Safety and Compliance Manager">Safety and Compliance Manager</option>
                                    <option value="Customer Service Manager">Customer Service Manager</option>
                                    <option value="Bus Driver">Bus Driver</option>
                                    <option value="Bus Conductor">Bus Conductor</option>
                                    <option value="Bus Maintenance Mechanic">Bus Maintenance Mechanic</option>
                                    <option value="Customer Service">Customer Service</option>
                                </select>
                            </div>
                            <div>
                                <label for="editDepartment" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                                <select id="editDepartment" name="editDepartment" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]">
                                    <option value="">Select Department</option>
                                    <option value="Operations Department">Bus Transportation Department</option>
                                    <option value="Operations Department">Operations Department</option>
                                    <option value="Maintenance Department">Maintenance Department</option>
                                    <option value="Safety and Compliance Department">Safety and Compliance Department</option>
                                    <option value="Customer Service Department">Customer Service Department</option>
                                    <option value="Human Resources Department">Human Resources Department</option>
                                    <option value="Finance Department">Finance Department</option>
                                </select>
                            </div>
                            <div>
                                <label for="editWorkExpertise" class="block text-sm font-medium text-gray-700 mb-1">Soft Skills</label>
                                <input type="text" id="editWorkExpertise" name="editWorkExpertise" placeholder="Soft Skills" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="25" />
                            </div>
                            <div>
                                <label for="editTechnicalSkills" class="block text-sm font-medium text-gray-700 mb-1">Technical Skills(Hard Skills)</label>
                                <input type="text" id="editTechnicalSkills" name="editTechnicalSkills" placeholder="Technical Skills" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="25" />
                                <input type="hidden" id="editIndex" name="editIndex">
                            </div>
                            <button type="submit" class="col-span-2 bg-[#00446b] text-white p-3 rounded-lg hover:bg-[#00446b] transition duration-300 focus:ring focus:ring-[#00446b]">Update</button>
                            <button type="button" onclick="closeEditModal()" class="col-span-2 bg-gray-500 text-white p-3 rounded-lg hover:bg-gray-600 transition duration-300 mt-2 focus:ring focus:ring-gray-200">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            // Function to filter items based on search input
            function filterItems() {
                const searchValue = document.getElementById("searchBar").value.toLowerCase();
                const rows = document.querySelectorAll("#itemTableBody tr");

                rows.forEach((row) => {
                    const name = row.querySelector("td:nth-child(1)").innerText.toLowerCase(); // Assuming the first column is 'Name'
                    const department = row.querySelector("td:nth-child(2)").innerText.toLowerCase(); // Department column
                    const jobPosition = row.querySelector("td:nth-child(6)").innerText.toLowerCase(); // Job Position column
                    const technicalSkills = row.querySelector("td:nth-child(8)").innerText.toLowerCase(); // Technical Skills column

                    if (
                        name.includes(searchValue) ||
                        department.includes(searchValue) ||
                        jobPosition.includes(searchValue) ||
                        technicalSkills.includes(searchValue)
                    ) {
                        row.style.display = ""; // Show row
                    } else {
                        row.style.display = "none"; // Hide row
                    }
                });
            }

            // Function to toggle display based on status
            function toggleStatus(status) {
                const rows = document.querySelectorAll("#itemTableBody tr");
                const activeButton = document.getElementById("activeButton");
                const inactiveButton = document.getElementById("inactiveButton");
                const showAllButton = document.getElementById("showAllButton");

                // Highlighting the correct button based on the clicked button
                if (status === "active") {
                    activeButton.classList.add("bg-blue-600", "hover:bg-blue-700");
                    inactiveButton.classList.remove("bg-blue-600", "hover:bg-blue-700");
                    showAllButton.classList.remove("bg-blue-600", "hover:bg-blue-700");
                } else if (status === "inactive") {
                    inactiveButton.classList.add("bg-blue-600", "hover:bg-blue-700");
                    activeButton.classList.remove("bg-blue-600", "hover:bg-blue-700");
                    showAllButton.classList.remove("bg-blue-600", "hover:bg-blue-700");
                } else {
                    showAllButton.classList.add("bg-blue-600", "hover:bg-blue-700");
                    activeButton.classList.remove("bg-blue-600", "hover:bg-blue-700");
                    inactiveButton.classList.remove("bg-blue-600", "hover:bg-blue-700");
                }

                // Filter rows based on status
                rows.forEach((row) => {
                    const statusValue = row.querySelector("td:nth-child(5)").innerText.toLowerCase(); // Assuming status column is the 5th

                    if (status === "all") {
                        row.style.display = ""; // Show all rows
                    } else if (statusValue === status) {
                        row.style.display = ""; // Show only matching status rows
                    } else {
                        row.style.display = "none"; // Hide non-matching rows
                    }
                });
            }

            // Function to filter items based on search input
            function filterItems() {
                const searchInput = document.getElementById("searchBar").value.toLowerCase();
                const rows = document.querySelectorAll("#itemTableBody tr");

                rows.forEach((row) => {
                    const nameValue = row.querySelector("td:nth-child(1)").innerText.toLowerCase(); // Assuming name is in the 1st column
                    if (nameValue.includes(searchInput)) {
                        row.style.display = ""; // Show matching row
                    } else {
                        row.style.display = "none"; // Hide non-matching row
                    }
                });
            }
            // Items will now come from the database via an AJAX call to PHP
            let items = [];

            // Load items from the database when the page loads
            window.onload = function() {
                fetchItemsFromDatabase();
            };

            // Fetch items from the database using AJAX
            function fetchItemsFromDatabase() {
                fetch('fetch_items.php')
                    .then(response => response.json())
                    .then(data => {
                        items = data; // Items fetched from the database
                        renderItems();
                    })
                    .catch(error => console.error('Error fetching items:', error));
            }

            // Add item to the database via PHP using POST request
            function addItem(event) {
                event.preventDefault();
                const formData = new FormData(document.getElementById('crudForm'));

                fetch('add_item.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.message) {
                            console.log(data.message);
                            fetchItems(); // Refresh list after adding
                        } else {
                            console.error(data.error);
                        }
                    });
            }

            // Render items fetched from the database
            function renderItems() {
                const itemTableBody = document.getElementById('itemTableBody');
                itemTableBody.innerHTML = '';

                items.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td class="py-2 px-4 border-b">${item.name}</td>
                <td class="py-2 px-4 border-b">${item.department}</td>
                <td class="py-2 px-4 border-b"><button class="bg-[#00446b] text-white p-1 rounded">Request</button></td>
                <td class="py-2 px-4 border-b">${item.hire_date}</td>
                <td class="py-2 px-4 border-b">${item.status}</td>
                <td class="py-2 px-4 border-b">${item.job_position}</td>
                <td class="py-2 px-4 border-b">${item.work_expertise}</td>
                <td class="py-2 px-4 border-b">${item.technical_skills}</td>
                <td class="py-2 px-4 flex">
                    <button onclick="editItem(${item.id})" class="bg-[#00446b] text-white p-1 rounded mr-2">Edit</button>
                    <button onclick="deleteItem(${item.id})" class="bg-[#00446b] text-white p-1 rounded">Delete</button>
                </td>
            `;
                    itemTableBody.appendChild(row);
                });
            }

            // Edit item in the database
            function editItem(itemId) {
                // Get the current item data from `items` array
                const item = items.find(item => item.id === itemId.toString());
                document.getElementById('editName').value = item.name;
                document.getElementById('editDepartment').value = item.department;
                document.getElementById('editHireDate').value = item.hire_date;
                document.getElementById('editStatus').value = item.status;
                document.getElementById('editJobPosition').value = item.job_position;
                document.getElementById('editWorkExpertise').value = item.work_expertise;
                document.getElementById('editTechnicalSkills').value = item.technical_skills;
                document.getElementById('editIndex').value = item.id;

                document.getElementById('editModal').classList.remove('hidden');
            }

            // Update item in the database
            function updateItem(event) {
                event.preventDefault();
                const itemId = document.getElementById('editIndex').value;

                const formData = new FormData();
                formData.append('id', itemId);
                formData.append('name', document.getElementById('editName').value);
                formData.append('department', document.getElementById('editDepartment').value);
                formData.append('hireDate', document.getElementById('editHireDate').value);
                formData.append('status', document.getElementById('editStatus').value);
                formData.append('jobPosition', document.getElementById('editJobPosition').value);
                formData.append('workExpertise', document.getElementById('editWorkExpertise').value);
                formData.append('technicalSkills', document.getElementById('editTechnicalSkills').value);

                fetch('update_item.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            fetchItemsFromDatabase(); // Refresh the list after updating
                            closeEditModal();
                        } else {
                            console.error('Error updating item:', data.message);
                        }
                    })
                    .catch(error => console.error('Error updating item:', error));
            }

            // Delete item from the database
            function deleteItem(itemId) {
                const formData = new FormData();
                formData.append('id', itemId);

                fetch('delete_item.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            fetchItemsFromDatabase(); // Refresh the list after deletion
                        } else {
                            console.error('Error deleting item:', data.message);
                        }
                    })
                    .catch(error => console.error('Error deleting item:', error));
            }

            // Close the edit modal
            function closeEditModal() {
                document.getElementById('editModal').classList.add('hidden');
            }
        </script>
        </body>

</html>