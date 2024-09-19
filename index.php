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

<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen p-4">
            <h1 class="text-lg font-bold">Employee Management</h1>
            <ul class="mt-4">
                <li class="my-2">
                    <a href="index.php" class="block p-2 hover:bg-gray-700 rounded">Competency Management</a>
                </li>
                <li class="my-2">
                    <a href="learning.php" class="block p-2 hover:bg-gray-700 rounded">Learning Management</a>
                </li>
                <li class="my-2">
                    <a href="training.php" class="block p-2 hover:bg-gray-700 rounded">Training Management</a>
                </li>
                <li class="my-2">
                    <a href="feedbacks.php" class="block p-2 hover:bg-gray-700 rounded">Feedbacks</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100 h-screen overflow-y-auto">
            <h2 class="text-2xl font-semibold mb-4">Competency Management</h2>

            <!-- Search and Filter Section -->
            <div class="flex items-center mb-4">
                <input type="text" id="searchBar" oninput="filterItems()" placeholder="Search..." class="p-2 border border-gray-300 rounded mr-2 flex-1">
                <button id="activeButton" onclick="toggleStatus('active')" class="button-inactive p-2 rounded">Active</button>
                <button id="inactiveButton" onclick="toggleStatus('inactive')" class="button-inactive p-2 rounded ml-2">Inactive</button>
            </div>

            <!-- Form to Add Item -->
            <form id="crudForm" onsubmit="addItem(event)" class="mb-6">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" id="name" placeholder="Name" class="p-2 border border-gray-300 rounded" required>
                    <select id="department" class="p-2 border border-gray-300 rounded">
                        <option value="">Select Department</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                        <option value="IT">IT</option>
                    </select>
                    <input type="text" id="contact" placeholder="Contact" class="p-2 border border-gray-300 rounded" required>
                    <input type="date" id="hireDate" class="p-2 border border-gray-300 rounded" required>
                    <select id="status" class="p-2 border border-gray-300 rounded">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <input type="text" id="jobPosition" placeholder="Job Position" class="p-2 border border-gray-300 rounded" required>
                    <input type="text" id="workExpertise" placeholder="Work Expertise" class="p-2 border border-gray-300 rounded" required>
                    <input type="text" id="technicalSkills" placeholder="Technical Skills" class="p-2 border border-gray-300 rounded" required>
                    <input type="text" id="leadershipSkills" placeholder="Leadership Skills" class="p-2 border border-gray-300 rounded" required>
                    <input type="text" id="abilities" placeholder="Abilities" class="p-2 border border-gray-300 rounded" required>
                    <select id="jobRole" class="p-2 border border-gray-300 rounded">
                        <option value="">Select Job Role</option>
                        <option value="Manager">Manager</option>
                        <option value="Developer">Developer</option>
                        <option value="Designer">Designer</option>
                    </select>
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded col-span-2">Add Item</button>
                </div>
            </form>

            <!-- Table to Display Items -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Department</th>
                            <th class="py-2 px-4 border-b">Contact</th>
                            <th class="py-2 px-4 border-b">Request</th>
                            <th class="py-2 px-4 border-b">Hire Date</th>
                            <th class="py-2 px-4 border-b">Status</th>
                            <th class="py-2 px-4 border-b">Job Position</th>
                            <th class="py-2 px-4 border-b">Work Expertise</th>
                            <th class="py-2 px-4 border-b">Technical Skills</th>
                            <th class="py-2 px-4 border-b">Leadership Skills</th>
                            <th class="py-2 px-4 border-b">Abilities</th>
                            <th class="py-2 px-4 border-b">Job Role</th>
                            <th class="py-2 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="itemTableBody">
                        <!-- Items will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Item Modal -->
    <div id="editModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 items-center justify-center">
        <div class="bg-white p-6 rounded shadow-lg">
            <h2 class="text-xl font-bold mb-4">Edit Item</h2>
            <form id="editForm" onsubmit="updateItem(event)">
                <input type="text" id="editName" placeholder="Name" class="p-2 border border-gray-300 rounded mr-2" required>
                <select id="editDepartment" class="p-2 border border-gray-300 rounded mr-2">
                    <option value="">Select Department</option>
                    <option value="HR">HR</option>
                    <option value="Finance">Finance</option>
                    <option value="IT">IT</option>
                </select>
                <input type="text" id="editContact" placeholder="Contact" class="p-2 border border-gray-300 rounded mr-2" required>
                <input type="date" id="editHireDate" class="p-2 border border-gray-300 rounded mr-2" required>
                <select id="editStatus" class="p-2 border border-gray-300 rounded mr-2">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                <input type="text" id="editJobPosition" placeholder="Job Position" class="p-2 border border-gray-300 rounded mr-2" required>
                <input type="text" id="editWorkExpertise" placeholder="Work Expertise" class="p-2 border border-gray-300 rounded mr-2" required>
                <input type="text" id="editTechnicalSkills" placeholder="Technical Skills" class="p-2 border border-gray-300 rounded mr-2" required>
                <input type="text" id="editLeadershipSkills" placeholder="Leadership Skills" class="p-2 border border-gray-300 rounded mr-2" required>
                <input type="text" id="editAbilities" placeholder="Abilities" class="p-2 border border-gray-300 rounded mr-2" required>
                <select id="editJobRole" class="p-2 border border-gray-300 rounded mr-2">
                    <option value="">Select Job Role</option>
                    <option value="Manager">Manager</option>
                    <option value="Developer">Developer</option>
                    <option value="Designer">Designer</option>
                </select>
                <input type="hidden" id="editIndex">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded mt-4">Update</button>
            </form>
            <button onclick="closeEditModal()" class="bg-gray-500 text-white p-2 rounded mt-4">Cancel</button>
        </div>
    </div>

    <script>
        let items = JSON.parse(localStorage.getItem('items')) || [];

        function addItem(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const department = document.getElementById('department').value;
            const contact = document.getElementById('contact').value;
            const hireDate = document.getElementById('hireDate').value;
            const status = document.getElementById('status').value;
            const jobPosition = document.getElementById('jobPosition').value;
            const workExpertise = document.getElementById('workExpertise').value;
            const technicalSkills = document.getElementById('technicalSkills').value;
            const leadershipSkills = document.getElementById('leadershipSkills').value;
            const abilities = document.getElementById('abilities').value;
            const jobRole = document.getElementById('jobRole').value;

            items.push({
                name,
                department,
                contact,
                hireDate,
                status,
                jobPosition,
                workExpertise,
                technicalSkills,
                leadershipSkills,
                abilities,
                jobRole
            });

            localStorage.setItem('items', JSON.stringify(items));
            document.getElementById('crudForm').reset();
            renderItems();
        }

        function renderItems() {
            const itemTableBody = document.getElementById('itemTableBody');
            itemTableBody.innerHTML = '';

            items.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="py-2 px-4 border-b">${item.name}</td>
                    <td class="py-2 px-4 border-b">${item.department}</td>
                    <td class="py-2 px-4 border-b">${item.contact}</td>
                    <td class="py-2 px-4 border-b"><button class="bg-blue-500 text-white p-1 rounded">Request</button></td>
                    <td class="py-2 px-4 border-b">${item.hireDate}</td>
                    <td class="py-2 px-4 border-b">${item.status}</td>
                    <td class="py-2 px-4 border-b">${item.jobPosition}</td>
                    <td class="py-2 px-4 border-b">${item.workExpertise}</td>
                    <td class="py-2 px-4 border-b">${item.technicalSkills}</td>
                    <td class="py-2 px-4 border-b">${item.leadershipSkills}</td>
                    <td class="py-2 px-4 border-b">${item.abilities}</td>
                    <td class="py-2 px-4 border-b">${item.jobRole}</td>
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
                    <td class="py-2 px-4 border-b">${item.contact}</td>
                    <td class="py-2 px-4 border-b"><button class="bg-blue-500 text-white p-1 rounded">Request</button></td>
                    <td class="py-2 px-4 border-b">${item.hireDate}</td>
                    <td class="py-2 px-4 border-b">${item.status}</td>
                    <td class="py-2 px-4 border-b">${item.jobPosition}</td>
                    <td class="py-2 px-4 border-b">${item.workExpertise}</td>
                    <td class="py-2 px-4 border-b">${item.technicalSkills}</td>
                    <td class="py-2 px-4 border-b">${item.leadershipSkills}</td>
                    <td class="py-2 px-4 border-b">${item.abilities}</td>
                    <td class="py-2 px-4 border-b">${item.jobRole}</td>
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
            document.getElementById('editContact').value = item.contact;
            document.getElementById('editHireDate').value = item.hireDate;
            document.getElementById('editStatus').value = item.status;
            document.getElementById('editJobPosition').value = item.jobPosition;
            document.getElementById('editWorkExpertise').value = item.workExpertise;
            document.getElementById('editTechnicalSkills').value = item.technicalSkills;
            document.getElementById('editLeadershipSkills').value = item.leadershipSkills;
            document.getElementById('editAbilities').value = item.abilities;
            document.getElementById('editJobRole').value = item.jobRole;
            document.getElementById('editIndex').value = index;

            document.getElementById('editModal').classList.remove('hidden');
        }

        function updateItem(event) {
            event.preventDefault();
            const index = document.getElementById('editIndex').value;
            items[index].name = document.getElementById('editName').value;
            items[index].department = document.getElementById('editDepartment').value;
            items[index].contact = document.getElementById('editContact').value;
            items[index].hireDate = document.getElementById('editHireDate').value;
            items[index].status = document.getElementById('editStatus').value;
            items[index].jobPosition = document.getElementById('editJobPosition').value;
            items[index].workExpertise = document.getElementById('editWorkExpertise').value;
            items[index].technicalSkills = document.getElementById('editTechnicalSkills').value;
            items[index].leadershipSkills = document.getElementById('editLeadershipSkills').value;
            items[index].abilities = document.getElementById('editAbilities').value;
            items[index].jobRole = document.getElementById('editJobRole').value;

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
    </script>
</body>

</html>