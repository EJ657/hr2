<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
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
                    <a href="index.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
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
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Competency Management</h2>

            <!-- Search and Filter Section -->
            <div class="flex items-center mb-6">
                <input type="text" id="searchBar" oninput="filterItems()" placeholder="Search..." class="p-3 border border-gray-300 rounded-lg shadow-sm flex-1 mr-4" />
                <button id="activeButton" onclick="toggleStatus('active')" class="bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition-all duration-300">Active</button>
                <button id="inactiveButton" onclick="toggleStatus('inactive')" class="bg-gray-500 text-white p-3 rounded-lg hover:bg-gray-600 transition-all duration-300 ml-4">Inactive</button>
            </div>

            <!-- Form to Add Item -->
            <form id="crudForm" onsubmit="addItem(event)" class="mb-8 p-6 bg-white rounded-lg shadow-lg">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" id="name" placeholder="Name" class="p-3 border border-gray-300 rounded-lg w-full" required />
                    </div>

                    <div>
                        <label for="hireDate" class="block text-sm font-medium text-gray-700 mb-1">Hire Date</label>
                        <input type="date" id="hireDate" class="p-3 border border-gray-300 rounded-lg w-full" required />
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status" class="p-3 border border-gray-300 rounded-lg w-full">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div>
                        <label for="jobPosition" class="block text-sm font-medium text-gray-700 mb-1">Job Position</label>
                        <select id="jobPosition" class="p-3 border border-gray-300 rounded-lg w-full">
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
                        <select id="department" class="p-3 border border-gray-300 rounded-lg w-full">
                            <option value="">Select Department</option>
                            <option value="Transportation Department">Transportation Department</option>
                            <option value="Customer Service Department">Customer Service Department</option>
                            <option value="Security Department">Security Department</option>
                            <option value="Human Resources Department">Human Resources Department</option>
                            <option value="Marketing Department">Marketing Department</option>
                            <option value="Finance Department">Finance Department</option>
                            <option value="Information Technology Department">Information Technology Department</option>
                            <option value="Logistics Department">Logistics Department</option>
                        </select>
                    </div>

                    <div>
                        <label for="workExpertise" class="block text-sm font-medium text-gray-700 mb-1">Work Expertise</label>
                        <input type="text" id="workExpertise" placeholder="Work Expertise" class="p-3 border border-gray-300 rounded-lg w-full" required />
                    </div>

                    <div>
                        <label for="technicalSkills" class="block text-sm font-medium text-gray-700 mb-1">Technical Skills</label>
                        <input type="text" id="technicalSkills" placeholder="Technical Skills" class="p-3 border border-gray-300 rounded-lg w-full" required />
                    </div>

                    <button type="submit" class="col-span-2 bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition-all duration-300">
                        Add Employee
                    </button>
                </div>
            </form>

            <!-- Table to Display Items -->
            <div class="overflow-x-auto bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-gray-700">Employee List</h3>
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="py-3 px-4 border-b">Name</th>
                            <th class="py-3 px-4 border-b">Department</th>
                            <th class="py-3 px-4 border-b">Request</th>
                            <th class="py-3 px-4 border-b">Hire Date</th>
                            <th class="py-3 px-4 border-b">Status</th>
                            <th class="py-3 px-4 border-b">Job Position</th>
                            <th class="py-3 px-4 border-b">Work Expertise</th>
                            <th class="py-3 px-4 border-b">Technical Skills</th>
                            <th class="py-3 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="itemTableBody">
                        <!-- Items will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Edit Item Modal -->
        <div id="editModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Edit Employee</h2>
                <form id="editForm" onsubmit="updateItem(event)">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" id="editName" placeholder="Name" class="p-3 border border-gray-300 rounded-lg w-full" required />
                        </div>
                        <div>
                            <label for="hireDate" class="block text-sm font-medium text-gray-700 mb-1">Hire Date</label>
                            <input type="date" id="editHireDate" class="p-3 border border-gray-300 rounded-lg w-full" required />
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select id="editStatus" class="p-3 border border-gray-300 rounded-lg w-full">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div>
                            <label for="jobPosition" class="block text-sm font-medium text-gray-700 mb-1">Job Position</label>
                            <select id="editJobPosition" class="p-3 border border-gray-300 rounded-lg w-full">
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
                            <select id="editDepartment" class="p-3 border border-gray-300 rounded-lg w-full">
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
                            <input type="text" id="editWorkExpertise" placeholder="Work Expertise" class="p-3 border border-gray-300 rounded-lg w-full" required />
                        </div>
                        <div>
                            <label for="technicalSkills" class="block text-sm font-medium text-gray-700 mb-1">Technical Skills</label>
                            <input type="text" id="editTechnicalSkills" placeholder="Technical Skills" class="p-3 border border-gray-300 rounded-lg w-full" required />
                            <input type="hidden" id="editIndex">
                        </div>
                        <button type="submit" class="bg-blue-500 text-white p-3 rounded-lg col-span-2">Update</button>
                        <button onclick="closeEditModal()" class="bg-gray-500 text-white p-3 rounded-lg col-span-2 mt-2">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            let items = JSON.parse(localStorage.getItem('items')) || [];
            let employeeNames = JSON.parse(localStorage.getItem('employeeNames')) || []; // Initialize employeeNames

            function addItem(event) {
                event.preventDefault();
                const name = document.getElementById('name').value;
                const department = document.getElementById('department').value;
                const hireDate = document.getElementById('hireDate').value;
                const status = document.getElementById('status').value;
                const jobPosition = document.getElementById('jobPosition').value;
                const workExpertise = document.getElementById('workExpertise').value;
                const technicalSkills = document.getElementById('technicalSkills').value;

                // Push employee name to employeeNames array
                employeeNames.push(name);
                localStorage.setItem('employeeNames', JSON.stringify(employeeNames)); // Store employee names

                // Store employee data
                items.push({
                    name,
                    department,
                    hireDate,
                    status,
                    jobPosition,
                    workExpertise,
                    technicalSkills,
                });

                localStorage.setItem('items', JSON.stringify(items));
                document.getElementById('crudForm').reset();
                renderItems();
                updateEmployeeSelect(); // Call function to update select options
            }

            function updateEmployeeSelect() {
                const employeeSelect = document.getElementById('employeeName'); // Adjusted to 'employeeName'
                employeeSelect.innerHTML = '<option value="">-- Select Employee --</option>'; // Reset options

                const employeeNames = JSON.parse(localStorage.getItem('employeeNames')) || [];
                employeeNames.forEach((name, index) => {
                    const option = document.createElement('option');
                    option.value = name; // Use name as value
                    option.textContent = name;
                    employeeSelect.appendChild(option);
                });
            }

            // Call the function on page load to initialize
            window.onload = function() {
                renderItems(); // Ensure items render on load
                updateEmployeeSelect(); // Update the employee select options
            };

            function renderItems() {
                const itemTableBody = document.getElementById('itemTableBody');
                itemTableBody.innerHTML = '';

                items.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td class="py-2 px-4 border-b">${item.name}</td>
                <td class="py-2 px-4 border-b">${item.department}</td>
                <td class="py-2 px-4 border-b"><button class="bg-blue-500 text-white p-1 rounded">Request</button></td>
                <td class="py-2 px-4 border-b">${item.hireDate}</td>
                <td class="py-2 px-4 border-b">${item.status}</td>
                <td class="py-2 px-4 border-b">${item.jobPosition}</td>
                <td class="py-2 px-4 border-b">${item.workExpertise}</td>
                <td class="py-2 px-4 border-b">${item.technicalSkills}</td>
                <td class="py-2 px-4 border-b">
                    <button onclick="editItem(${index})" class="bg-yellow-500 text-white p-1 rounded mr-2">Edit</button>
                    <button onclick="deleteItem(${index})" class="bg-red-500 text-white p-1 rounded">Delete</button>
                </td>
            `;
                    itemTableBody.appendChild(row);
                });
            }

            function filterItems() {
                const searchValue = document.getElementById('searchBar').value.toLowerCase();
                const filteredItems = items.filter(item => item.name.toLowerCase().includes(searchValue));

                document.getElementById('itemTableBody').innerHTML = '';
                filteredItems.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td class="py-2 px-4 border-b">${item.name}</td>
                <td class="py-2 px-4 border-b">${item.department}</td>
                <td class="py-2 px-4 border-b"><button class="bg-blue-500 text-white p-1 rounded">Request</button></td>
                <td class="py-2 px-4 border-b">${item.hireDate}</td>
                <td class="py-2 px-4 border-b">${item.status}</td>
                <td class="py-2 px-4 border-b">${item.jobPosition}</td>
                <td class="py-2 px-4 border-b">${item.workExpertise}</td>
                <td class="py-2 px-4 border-b">${item.technicalSkills}</td>
                <td class="py-2 px-4 border-b">
                    <button onclick="editItem(${index})" class="bg-yellow-500 text-white p-1 rounded mr-2">Edit</button>
                    <button onclick="deleteItem(${index})" class="bg-red-500 text-white p-1 rounded">Delete</button>
                </td>
            `;
                    document.getElementById('itemTableBody').appendChild(row);
                });
            }

            function toggleStatus(status) {
                const activeButton = document.getElementById('activeButton');
                const inactiveButton = document.getElementById('inactiveButton');

                if (status === 'active') {
                    activeButton.classList.add('button-active');
                    activeButton.classList.remove('button-inactive');
                    inactiveButton.classList.add('button-inactive');
                    inactiveButton.classList.remove('button-active');
                } else {
                    inactiveButton.classList.add('button-active');
                    inactiveButton.classList.remove('button-inactive');
                    activeButton.classList.add('button-inactive');
                    activeButton.classList.remove('button-active');
                }
            }

            function editItem(index) {
                const item = items[index];
                document.getElementById('editName').value = item.name;
                document.getElementById('editDepartment').value = item.department;
                document.getElementById('editHireDate').value = item.hireDate;
                document.getElementById('editStatus').value = item.status;
                document.getElementById('editJobPosition').value = item.jobPosition;
                document.getElementById('editWorkExpertise').value = item.workExpertise;
                document.getElementById('editTechnicalSkills').value = item.technicalSkills;
                document.getElementById('editIndex').value = index;

                document.getElementById('editModal').classList.remove('hidden');
            }

            function updateItem(event) {
                event.preventDefault();
                const index = document.getElementById('editIndex').value;
                items[index].name = document.getElementById('editName').value;
                items[index].department = document.getElementById('editDepartment').value;
                items[index].hireDate = document.getElementById('editHireDate').value;
                items[index].status = document.getElementById('editStatus').value;
                items[index].jobPosition = document.getElementById('editJobPosition').value;
                items[index].workExpertise = document.getElementById('editWorkExpertise').value;
                items[index].technicalSkills = document.getElementById('editTechnicalSkills').value;

                localStorage.setItem('items', JSON.stringify(items));
                closeEditModal();
                renderItems();
            }

            function closeEditModal() {
                document.getElementById('editModal').classList.add('hidden');
            }

            function deleteItem(index) {
                items.splice(index, 1);
                localStorage.setItem('items', JSON.stringify(items));
                renderItems();
            }

            renderItems();
            updateEmployeeSelect(); // Update the employee select options
        </script>


</body>

</html>