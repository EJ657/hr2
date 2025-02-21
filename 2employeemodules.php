<?php
include("connection.php");
include("auth.php"); // Include the authentication file
checkAuth(); // Call the function to check if user is authenticated

$modules = [
    ["name" => "Defensive Driving Techniques", "description" => "Click to view details.", "link" => "moduleDetails1.php"],
    ["name" => "Customer Service Fundamentals", "description" => "Click to view details.", "link" => "moduleDetails2.php"],
    ["name" => "Bus Repair and Maintenance Basics", "description" => "Click to view details.", "link" => "moduleDetails3.php"],
    ["name" => "Effective Communication Skills", "description" => "Click to view details.", "link" => "moduleDetails4.php"],
    ["name" => "Emergency Response Procedures", "description" => "Click to view details.", "link" => "moduleDetails5.php"],
    ["name" => "Conflict Resolution in the Workplace", "description" => "Click to view details.", "link" => "moduleDetails6.php"],
    ["name" => "Digital Marketing Essentials", "description" => "Click to view details.", "link" => "moduleDetails7.php"],
    ["name" => "Financial Reporting and Analysis", "description" => "Click to view details.", "link" => "moduleDetails8.php"],
    ["name" => "Leadership and Management Skills", "description" => "Click to view details.", "link" => "moduleDetails9.php"],
    ["name" => "Supply Chain Management Basics", "description" => "Click to view details.", "link" => "moduleDetails10.php"],
    ["name" => "Fleet and Transportation Management", "description" => "Click to view details.", "link" => "moduleDetails11.php"],
    ["name" => "Route Planning and Optimization", "description" => "Click to view details.", "link" => "moduleDetails12.php"],
    ["name" => "Health and Safety Training", "description" => "Click to view details.", "link" => "moduleDetails13.php"],
    ["name" => "Complaint Handling and Resolution", "description" => "Click to view details.", "link" => "moduleDetails14.php"],
    ["name" => "Vehicle Operations and Safety", "description" => "Click to view details.", "link" => "moduleDetails15.php"],
];
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

    <class class="flex">
        <!-- Sidebar -->
        <div class="fixed top-0 left-0 w-56 bg-[#fbfbfe] text-black border m-4 mr-0 rounded-lg overflow-hidden h-screen flex flex-col shadow-lg">
            <!-- Logo Section -->
            <div class="flex flex-col h-full bg-base-200 p-4 space-y-4 overflow-y-auto scrollbar-hide">
                <div class="flex items-center justify-center mt-2 mb-4">
                    <a href="2employeedashboard.php" class="flex items-center">
                        <img class="w-10 h-10 mr-2" src="icons/nexfleet.svg" alt="NextFleet Logo">
                        <p class="font-bold text-2xl text-center text-[#00446b]">NextFleet Dynamics</p>
                    </a>
                </div>

                <!-- Navigation Links -->
                <ul class="flex flex-col space-y-3">

                    <!-- Employee Dashboard Link -->
                    <li>
                        <a href="2employeedashboard.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                            <img class="w-5 h-5 mr-3" src="icons/dashboard.png" alt="Dashboard Icon">
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Employee Modules Link -->
                    <li>
                        <a href="2employeemodules.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                            <img class="w-5 h-5 mr-3" src="icons/competency.png" alt="Module Icon">
                            <span>Modules</span>
                        </a>
                    </li>

                    <!-- Others  -->
                    <li>
                        <details class="group">
                            <summary class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white cursor-pointer">
                                <div class="flex items-center">
                                    <img class="w-5 h-5 mr-3" src="icons/learningtraining.png" alt="Others Icon">
                                    <span>Others</span>
                                </div>
                                <svg class="w-5 h-5 transition-transform transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>

                            <!-- Submenu -->
                            <ul class="p-2 space-y-2 pl-6">
                                <li class="flex items-center">
                                    <img class="w-5 h-5 mr-3" src="icons/learningmodule.png" alt="Learning Module Icon">
                                    <a href="2messageadmin.php" class="block py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                        Message Admin
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <img class="w-5 h-5 mr-3" src="icons/trainingemployeelist.png" alt="View Employees Icon">
                                    <a href="2settings.php" class="block py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                        Settings
                                    </a>
                                </li>
                                <li class="flex items-center">
                                    <img class="w-5 h-5 mr-3" src="icons/learningmodulemanagement.png" alt="View Learning Modules Icon">
                                    <a href="2aboutus.php" class="block py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
                                        About us
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
                        <h2 class="text-4xl font-semibold text-gray-800">Employee Modules</h2>
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
                                <button onclick="saveProfileDetails()" class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
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
            <div class="mt-14 grid grid-cols-3 gap-4">
                <?php foreach ($modules as $module): ?>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold mb-2"><?php echo $module['name']; ?></h3>
                        <p class="text-gray-600 mb-4"><?php echo $module['description']; ?></p>
                    </div>
                    <a href="<?php echo $module['link']; ?>" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-[#00446b] self-start">View Details</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </class>
</body>

</html>
