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
            <div class="mt-12">

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
            </div>

            <!-- Learning Module List Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <div class="flex flex-wrap gap-4 mb-6">
                    <div class="flex-1 bg-[#00446b] p-4 rounded-lg text-white shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                        <h3 class="text-sm font-semibold">Active Modules</h3>
                        <p class="text-3xl font-bold" id="activeCount">0</p>
                    </div>
                    <div class="flex-1 bg-[#00446b] p-4 rounded-lg text-white shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                        <h3 class="text-sm font-semibold">Pending Modules</h3>
                        <p class="text-3xl font-bold" id="pendingCount">0</p>
                    </div>
                    <div class="flex-1 bg-[#00446b] p-4 rounded-lg text-white shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                        <h3 class="text-sm font-semibold">Completed Modules</h3>
                        <p class="text-3xl font-bold" id="completedCount">0</p>
                    </div>
                    <div class="flex-1 bg-[#00446b] p-4 rounded-lg text-white shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                        <h3 class="text-sm font-semibold">Total Modules</h3>
                        <p class="text-3xl font-bold" id="totalCount">0</p>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-gray-700">Module List</h3>
                    <button id="addNewModuleBtn" class="bg-[#00446b] text-white rounded-lg px-4 py-2 hover:bg-[#00446be8] transition duration-200 shadow-md transform hover:scale-105">
                        Add New Module
                    </button>
                </div>

                <!-- Module List Table -->
                <table class="min-w-full bg-white border border-gray-200" id="moduleTable">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b">Module Name</th>
                            <th class="py-3 px-4 border-b">Category</th>
                            <th class="py-3 px-4 border-b">Status</th>
                            <th class="py-3 px-4 border-b">Due Date</th>
                            <th class="py-3 px-4 border-b">Progress</th>
                            <th class="py-3 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="moduleTableBody">
                        <!-- Dynamic content will be injected here -->
                    </tbody>
                </table>
            </div>

            <!-- Add/Edit Module Modal -->
            <div id="moduleModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full">
                    <h2 id="modalTitle" class="text-2xl font-bold mb-6 text-center text-gray-800">Add/Edit Module</h2>
                    <form id="moduleForm" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="moduleName" class="block text-sm font-medium text-gray-700 mb-1">Module Name</label>
                            <select id="moduleName" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required>
                                <option value="">-- Select Module --</option>
                                <option value="Defensive Driving Techniques">Defensive Driving Techniques</option>
                                <option value="Customer Service Fundamentals">Customer Service Fundamentals</option>
                                <option value="Bus Repair and Maintenance Basics">Bus Repair and Maintenance Basics</option>
                                <option value="Effective Communication Skills">Effective Communication Skills</option>
                                <option value="Emergency Response Procedures">Emergency Response Procedures</option>
                                <option value="Conflict Resolution in the Workplace">Conflict Resolution in the Workplace</option>
                                <option value="Digital Marketing Essentials">Digital Marketing Essentials</option>
                                <option value="Financial Reporting and Analysis">Financial Reporting and Analysis</option>
                                <option value="Leadership and Management Skills">Leadership and Management Skills</option>
                                <option value="Supply Chain Management Basics">Supply Chain Management Basics</option>
                                <option value="Fleet and Transportation Management">Fleet and Transportation Management</option>
                                <option value="Route Planning and Optimization">Route Planning and Optimization</option>
                                <option value="Health and Safety Training">Health and Safety Training</option>
                                <option value="Complaint Handling and Resolution">Complaint Handling and Resolution</option>
                                <option value="Vehicle Operations and Safety">Vehicle Operations and Safety</option>
                            </select>
                        </div>
                        <div>
                            <label for="moduleCategory" class="block text-sm font-medium text-gray-700 mb-1">Module Category</label>
                            <select id="moduleCategory" class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]">
                                <option value="">--Select Module Category--</option>
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
                            <label for="moduleStatus" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select id="moduleStatus" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required>
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div>
                            <label for="moduleDueDate" class="block text-sm font-medium text-gray-700 mb-2">Due Date</label>
                            <input type="date" id="moduleDueDate" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required>
                        </div>
                        <div>
                            <label for="moduleProgress" class="block text-sm font-medium text-gray-700 mb-2">Progress (%)</label>
                            <input type="number" id="moduleProgress" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" min="0" max="100" required>
                        </div>
                        <div class="col-span-2">
                            <button type="button" id="modalCloseBtn" class="bg-gray-400 text-white rounded-lg px-4 py-2 hover:bg-gray-500 transition duration-200">Close</button>
                            <button type="submit" id="submitBtn" class="bg-[#00446b] text-white rounded-lg px-4 py-2 hover:bg-[#00446be8] transition duration-200">Save Module</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let modules = [];
        let isEditing = false;
        let editingIndex = null;

        const moduleTableBody = document.getElementById('moduleTableBody');
        const activeCount = document.getElementById('activeCount');
        const pendingCount = document.getElementById('pendingCount');
        const completedCount = document.getElementById('completedCount');
        const totalCount = document.getElementById('totalCount');

        const moduleForm = document.getElementById('moduleForm');
        const moduleModal = document.getElementById('moduleModal');
        const modalCloseBtn = document.getElementById('modalCloseBtn');
        const addNewModuleBtn = document.getElementById('addNewModuleBtn');

        // Fetch modules from the database
        function fetchModules() {
            fetch('get_modules.php')
                .then(response => response.json())
                .then(data => {
                    modules = data;
                    console.log(data);
                    renderModules();
                })
                .catch(error => console.error('Error fetching modules:', error));
        }

        // Render module list
        function renderModules() {
            moduleTableBody.innerHTML = '';
            let active = 0,
                pending = 0,
                completed = 0;

            modules.forEach((module, index) => {
                const row = document.createElement('tr');
                row.innerHTML =
                    `<td class="py-3 px-4 border-b">${module.name}</td>
                     <td class="py-3 px-4 border-b">${module.category}</td>
                     <td class="py-3 px-4 border-b text-${module.status === 'active' ? 'green-600' : module.status === 'pending' ? 'yellow-600' : 'gray-600'}">
                         ${module.status.charAt(0).toUpperCase() + module.status.slice(1)}
                     </td>
                     <td class="py-3 px-4 border-b">${module.due_date}</td>
                     <td class="py-3 px-4 border-b">
                         <div class="w-full bg-gray-200 rounded-full h-3">
                             <div class="bg-[#00446b] h-3 rounded-full" style="width: ${module.progress}%;"></div>
                         </div>
                         <span class="text-sm">${module.progress}%</span>
                     </td>
                     <td class="py-3 px-4 border-b">
                         <button class="text-[#00446b] hover:underline" onclick="editModule(${module.id})">Edit</button> |
                         <button class="text-[#00446b] hover:underline" onclick="deleteModule(${module.id})">Delete</button>
                     </td>`;
                moduleTableBody.appendChild(row);

                // Count module statuses
                if (module.status === 'active') active++;
                else if (module.status === 'pending') pending++;
                else if (module.status === 'completed') completed++;
            });

            // Update metrics
            activeCount.textContent = active;
            pendingCount.textContent = pending;
            completedCount.textContent = completed;
            totalCount.textContent = modules.length;
        }

        // Edit module function
        function editModule(moduleId) {
            console.log(moduleId);
            const module = modules.find(m => m.id == moduleId);
            if (module) {
                document.getElementById('modalTitle').textContent = 'Edit Module';
                document.getElementById('moduleName').value = module.name;
                document.getElementById('moduleCategory').value = module.category;
                document.getElementById('moduleStatus').value = module.status;
                document.getElementById('moduleDueDate').value = module.due_date;
                document.getElementById('moduleProgress').value = module.progress;

                isEditing = true;
                editingIndex = modules.indexOf(module);
                moduleModal.classList.remove('hidden');
            }
        }

        // Delete module function
        function deleteModule(moduleId) {
            if (!confirm("Are you sure you want to delete this module?")) {
                return; // Exit if user cancels
            }

            fetch('module_handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'delete',
                        id: moduleId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Remove the module from the array
                        modules = modules.filter(module => module.id !== moduleId);
                        fetchModules();
                        renderModules(); // Re-render the table
                    } else {
                        alert('Error deleting module: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Modal close button
        modalCloseBtn.addEventListener('click', function() {
            moduleModal.classList.add('hidden');
        });

        // Form submission
        moduleForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const newModule = {
                name: document.getElementById('moduleName').value,
                category: document.getElementById('moduleCategory').value,
                status: document.getElementById('moduleStatus').value,
                due_date: document.getElementById('moduleDueDate').value,
                progress: document.getElementById('moduleProgress').value
            };

            if (isEditing) {
                fetch('module_handler.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams({
                            action: 'edit',
                            id: modules[editingIndex].id,
                            ...newModule
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            modules[editingIndex] = {
                                ...newModule,
                                id: modules[editingIndex].id
                            };
                            renderModules();
                            moduleModal.classList.add('hidden');
                        } else {
                            alert(data.message);
                        }
                    });
            } else {
                fetch('module_handler.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams({
                            action: 'add',
                            ...newModule
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            modules.push({
                                ...newModule,
                                id: data.id
                            });
                            renderModules();
                            moduleModal.classList.add('hidden');
                        } else {
                            alert(data.message);
                        }
                    });
            }
        });

        // Initialize
        fetchModules();
        addNewModuleBtn.addEventListener('click', () => {
            document.getElementById('modalTitle').textContent = 'Add New Module';
            moduleForm.reset();
            isEditing = false;
            moduleModal.classList.remove('hidden');
        });
    </script>
</body>

</html>