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
    <title>Human Resources 2</title>
</head>

<body">
    <div class="flex">
        <!-- Sidebar -->
        <!-- Logo Section -->
        <div class="fixed top-0 left-0 w-56 bg-[#fbfbfe] text-black border m-4 mr-0 rounded-lg overflow-hidden h-screen flex flex-col">
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
                    <a href="logout.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446b] hover:text-white">
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
                    <h2 class="text-4xl font-semibold text-gray-800">Competency Management</h2>
                </div>
            </div>

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
                            class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b]" required minlength="2" maxlength="25"/>
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
                            <option value="Bus Driver">Bus Driver</option>
                            <option value="Bus Conductor">Bus Conductor</option>
                            <option value="Bus Maintenance Mechanic">Bus Maintenance Mechanic</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Security Guard">Security Guard</option>
                            <option value="Human Resource Manager">Human Resource Manager</option>
                            <option value="Marketing Coordinator">Marketing Coordinator</option>
                            <option value="Finance Manager">Finance Manager</option>
                            <option value="IT Specialist">IT Specialist</option>
                            <option value="Logistics Coordinator">Logistics Coordinator</option>
                        </select>
                    </div>

                    <div>
                        <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select id="department" name="department" class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required>
                            <option value="">Select Department</option>
                            <option value="Transportation Department">Transportation Department</option>
                            <option value="Customer Service Department">Customer Service Department</option>
                            <option value="Security Department">Security Department</option>
                            <option value="Human Resources Department">Human Resources Department</option>
                            <option value="Marketing Department">Marketing Department</option>
                            <option value="Finance Department">Finance Department</option>
                            <option value="IT Department">IT Department</option>
                            <option value="Logistics Department">Logistics Department</option>
                        </select>
                    </div>

                    <div>
                        <label for="workExpertise" class="block text-sm font-medium text-gray-700 mb-1">Work Expertise</label>
                        <input type="text" id="workExpertise" name="workExpertise" placeholder="Work Expertise"
                            class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="15"/>
                    </div>

                    <div>
                        <label for="technicalSkills" class="block text-sm font-medium text-gray-700 mb-1">Technical Skills</label>
                        <input type="text" id="technicalSkills" name="technicalSkills" placeholder="Technical Skills"
                            class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="15"/>
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
                        <col span="1" style="width: 12%;"> <!-- Work Expertise -->
                        <col span="1" style="width: 12%;"> <!-- Technical Skills -->
                        <col span="1" style="width: 10%;"> <!-- Actions -->
                    </colgroup>
                    <thead class="bg-gray-200 font-medium text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b text-left">Name</th>
                            <th class="py-3 px-4 border-b text-left">Department</th>
                            <th class="py-3 px-4 border-b text-left">Request</th>
                            <th class="py-3 px-4 border-b text-left">Hire Date</th>
                            <th class="py-3 px-4 border-b text-left">Status</th>
                            <th class="py-3 px-4 border-b text-left">Job Position</th>
                            <th class="py-3 px-4 border-b text-left">Work Expertise</th>
                            <th class="py-3 px-4 border-b text-left">Technical Skills</th>
                            <th class="py-3 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="itemTableBody">
                        <!-- Dynamic content will be injected here -->
                    </tbody>

                </table>
            </div>

            <style>
                .action-button {
                    padding: 6px 12px;
                    border-radius: 4px;
                    font-size: 0.875rem;
                    transition: background-color 0.3s, transform 0.2s;
                }

                .action-button:hover {
                    transform: translateY(-2px);
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                }

                th,
                td {
                    text-align: left;
                }

                colgroup col:nth-child(4) {
                    width: 18%;
                }

                td {
                    vertical-align: middle;
                }
            </style>

            <!-- Edit Item Modal -->
            <div id="editModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full">
                    <h2 class="text-xl font-bold mb-4">Edit Employee</h2>
                    <form id="editForm" onsubmit="updateItem(event)">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="editName" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="editName" name="editName" placeholder="Name" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="25"/>
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
                                    <option value="Bus Driver">Bus Driver</option>
                                    <option value="Bus Conductor">Bus Conductor</option>
                                    <option value="Bus Maintenance Mechanic">Bus Maintenance Mechanic</option>
                                    <option value="Customer Service">Customer Service</option>
                                    <option value="Security Guard">Security Guard</option>
                                    <option value="Human Resource Manager">Human Resource Manager</option>
                                    <option value="Marketing Coordinator">Marketing Coordinator</option>
                                    <option value="Finance Manager">Finance Manager</option>
                                    <option value="IT Specialist">IT Specialist</option>
                                    <option value="Logistics Coordinator">Logistics Coordinator</option>
                                </select>
                            </div>
                            <div>
                                <label for="editDepartment" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                                <select id="editDepartment" name="editDepartment" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]">
                                    <option value="">Select Department</option>
                                    <option value="Transportation Department">Transportation Department</option>
                                    <option value="Customer Service Department">Customer Service Department</option>
                                    <option value="Security Department">Security Department</option>
                                    <option value="Human Resources Department">Human Resources Department</option>
                                    <option value="Marketing Department">Marketing Department</option>
                                    <option value="Finance Department">Finance Department</option>
                                    <option value="IT Department">IT Department</option>
                                    <option value="Logistics Department">Logistics Department</option>
                                </select>
                            </div>
                            <div>
                                <label for="editWorkExpertise" class="block text-sm font-medium text-gray-700 mb-1">Work Expertise</label>
                                <input type="text" id="editWorkExpertise" name="editWorkExpertise" placeholder="Work Expertise" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="25"/>
                            </div>
                            <div>
                                <label for="editTechnicalSkills" class="block text-sm font-medium text-gray-700 mb-1">Technical Skills</label>
                                <input type="text" id="editTechnicalSkills" name="editTechnicalSkills" placeholder="Technical Skills" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required minlength="2" maxlength="25"/>
                                <input type="hidden" id="editIndex" name="editIndex">
                            </div>
                            <button type="submit" class="col-span-2 bg-[#00446b] text-white p-3 rounded-lg hover:bg-[#00446b] transition duration-300 focus:ring focus:ring-[#00446b]">Update</button>
                            <button type="button" onclick="closeEditModal()" class="col-span-2 bg-gray-500 text-white p-3 rounded-lg hover:bg-gray-600 transition duration-300 mt-2 focus:ring focus:ring-gray-200">Cancel</button>
                        </div>
                    </form>
                </div>
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