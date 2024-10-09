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
<body>
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
                    <a href="dashboard.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446be8] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/dashboard.png" alt="Dashboard Icon">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="competency.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446be8] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/competency.png" alt="Competency Icon">
                        <span>Competency Management</span>
                    </a>
                </li>
                <li>
                    <a href="learning.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446be8] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/learningtraining.png" alt="Learning and Training Icon">
                        <span>Learning & Training Management</span>
                    </a>
                </li>
                <li>
                    <a href="feedbacks.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446be8] hover:text-white">
                        <img class="w-5 h-5 mr-3" src="icons/feedback.png" alt="Feedback Icon">
                        <span>Feedback</span>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="flex items-center py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-[#00446be8] hover:text-white">
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
                    <h2 class="text-4xl font-semibold text-gray-800">Training Module Management</h2>
                </div>
            </div>

            <!-- Training Module List Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <!-- Key Metrics -->
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
                            <th class="py-3 px-4 border-b text-left">Module Name</th>
                            <th class="py-3 px-4 border-b text-left">Category</th>
                            <th class="py-3 px-4 border-b text-left">Status</th>
                            <th class="py-3 px-4 border-b text-left">Due Date</th>
                            <th class="py-3 px-4 border-b text-left">Progress</th>
                            <th class="py-3 px-4 border-b text-left">Actions</th>
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
                                <option value="Introduction to Cybersecurity">Introduction to Cybersecurity</option>
                                <option value="Supply Chain Management Basics">Supply Chain Management Basics</option>
                            </select>
                        </div>
                        <div>
                            <label for="moduleCategory" class="block text-sm font-medium text-gray-700 mb-1">Module Category</label>
                            <select id="moduleCategory" class="p-3 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]">
                                <option value="">--Select Module Category--</option>
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
                            <input type="number" id="moduleProgress" placeholder="Enter Progress (%)" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-[#00446b] focus:border-[#00446b]" required min="0" max="100">
                        </div>
                        <div class="md:col-span-2 flex justify-end space-x-4 mt-6">
                            <button type="submit" class="bg-[#00446b] text-white p-3 rounded-lg hover:bg-[#00446be8] transition duration-200 focus:outline-none focus:ring focus:ring-[#00446b] transform hover:scale-105">Save Module</button>
                            <button type="button" onclick="hideModal()" class="bg-gray-600 text-white p-3 rounded-lg hover:bg-[#00446be8] transition duration-200 focus:outline-none focus:ring focus:ring-gray-300 transform hover:scale-105">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                let modules = JSON.parse(localStorage.getItem('modules')) || [];
                let isEditing = false;
                let editingIndex = null;

                const moduleTableBody = document.getElementById('moduleTableBody');
                const moduleModal = document.getElementById('moduleModal');
                const moduleForm = document.getElementById('moduleForm');
                const modalTitle = document.getElementById('modalTitle');
                const activeCount = document.getElementById('activeCount');
                const pendingCount = document.getElementById('pendingCount');
                const completedCount = document.getElementById('completedCount');
                const totalCount = document.getElementById('totalCount');

                // Show module modal for adding/editing
                function showModal(edit = false) {
                    modalTitle.textContent = edit ? "Edit Module" : "Add New Module";
                    if (!edit) moduleForm.reset();
                    moduleModal.classList.remove('hidden');
                }

                // Hide module modal
                function hideModal() {
                    moduleModal.classList.add('hidden');
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
                     <td class="py-3 px-4 border-b">${module.dueDate}</td>
                     <td class="py-3 px-4 border-b">
                         <div class="w-full bg-gray-200 rounded-full h-3">
                             <div class="bg-[#00446b] h-3 rounded-full" style="width: ${module.progress}%;"></div>
                         </div>
                         <span class="text-sm">${module.progress}%</span>
                     </td>
                     <td class="py-3 px-4 border-b">
                         <button class="text-[#00446b] hover:underline" onclick="editModule(${index})">Edit</button> |
                         <button class="text-[#00446b] hover:underline" onclick="deleteModule(${index})">Delete</button>
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

                // Save modules to local storage
                function saveModules() {
                    localStorage.setItem('modules', JSON.stringify(modules));
                }

                // Add or Edit module form submission
                moduleForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const newModule = {
                        name: moduleName.value,
                        category: moduleCategory.value,
                        status: moduleStatus.value,
                        dueDate: moduleDueDate.value,
                        progress: moduleProgress.value
                    };

                    if (isEditing) {
                        modules[editingIndex] = newModule; // Fixed this line
                        isEditing = false;
                        editingIndex = null;
                    } else {
                        modules.push(newModule);
                    }

                    saveModules();
                    renderModules();
                    hideModal();
                });
                
                // Edit module
                function editModule(index) {
                    isEditing = true;
                    editingIndex = index;
                    const module = modules[index];
                    moduleName.value = module.name;
                    moduleCategory.value = module.category;
                    moduleStatus.value = module.status;
                    moduleDueDate.value = module.dueDate;
                    moduleProgress.value = module.progress;
                    showModal(true);
                }

                // Delete module
                function deleteModule(index) {
                    modules.splice(index, 1);
                    saveModules();
                    renderModules();
                }

                // Show modal when "Add New Module" button is clicked
                document.getElementById('addNewModuleBtn').addEventListener('click', () => showModal(false));

                // Hide modal on clicking outside or pressing escape
                window.addEventListener('click', (e) => {
                    if (e.target === moduleModal) hideModal();
                });
                window.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') hideModal();
                });

                // Initial render
                renderModules();
            </script>
        </div>
    </div>
</body>

</html>