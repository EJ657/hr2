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
    <title>Human Resources - Training Module</title>
</head>

<body class="custom-bg">
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
        <div class="mt-16">

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

            <!-- Enrollment Learning Module Form -->
            <form id="enrollmentForm" class="p-8 bg-white rounded-lg shadow-md max-w-4xl mx-auto space-y-6 mt-16">

                <!-- Employee Name -->
                <div class="mb-6">
                    <label for="employeeName" class="block text-gray-700 font-medium mb-2 text-xl">Select Employee:</label>
                    <select id="employeeName" class="block w-full border border-gray-300 rounded-lg p-4 focus:ring focus:ring-[#00446b] text-lg">
                        <option value="">-- Select Employee --</option>
                        <!-- Options will be dynamically populated here -->
                    </select>
                </div>

                <!-- Select Module -->
                <div class="mb-6">
                    <label for="module" class="block text-gray-700 font-medium mb-2 text-xl">Select Module:</label>
                    <select id="module" class="block w-full border border-gray-300 rounded-lg p-4 focus:ring focus:ring-[#00446b] text-lg">
                        <option value="">-- Select Module --</option>
                        <option value="Module 1">Defensive Driving Techniques</option>
                        <option value="Module 2">Customer Service Fundamentals</option>
                        <option value="Module 3">Bus Repair and Maintenance Basics</option>
                        <option value="Module 4">Effective Communication Skills</option>
                        <option value="Module 5">Emergency Response Procedures</option>
                        <option value="Module 6">Conflict Resolution in the Workplace</option>
                        <option value="Module 7">Digital Marketing Essentials</option>
                        <option value="Module 8">Financial Reporting and Analysis</option>
                        <option value="Module 9">Leadership and Management Skills</option>
                        <option value="Module 10">Supply Chain Management Basics</option>
                        <option value="Module 11">Fleet and Transportation Management</option>
                        <option value="Module 12">Route Planning and Optimization</option>
                        <option value="Module 13">Health and Safety Training</option>
                        <option value="Module 14">Complaint Handling and Resolution</option>
                        <option value="Module 15">Vehicle Operations and Safety</option>
                    </select>
                </div>

                <!-- Enroll Button -->
                <button type="button" id="enrollButton" class="w-full bg-[#00446b] text-white rounded-lg p-4 text-lg hover:bg-[#00446be8] transition duration-300">Enroll Employee</button>
            </form>
        </div>

        <script>
            // Retrieve employee data from localStorage and populate the select dropdown
            function populateEmployeeDropdown() {
                const employeeNameSelect = document.getElementById('employeeName');
                const employees = JSON.parse(localStorage.getItem('employees')) || [];

                // Clear previous options
                employeeNameSelect.innerHTML = '<option value="">-- Select Employee --</option>';

                // Add each employee to the dropdown
                employees.forEach(employee => {
                    const option = document.createElement('option');
                    option.value = employee.name;
                    option.textContent = employee.name;
                    employeeNameSelect.appendChild(option);
                });
            }

            // Call the function to populate the dropdown on page load
            document.addEventListener('DOMContentLoaded', populateEmployeeDropdown);

            // Listen for the Enroll button click event
            document.getElementById('enrollButton').addEventListener('click', function() {
                // Get the form values
                const employeeName = document.getElementById('employeeName').value.trim();
                const module = document.getElementById('module').value;

                // Validate the form fields
                if (employeeName && module) {
                    alert(`Employee ${employeeName} enrolled successfully!`);
                    document.getElementById('enrollmentForm').reset();
                } else {
                    alert('Please fill in all fields.');
                }
            });
        </script>
    </div>

</body>

</html>
