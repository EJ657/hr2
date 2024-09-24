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
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Courses Dashboard</h2>

api

            <!-- Course List Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-gray-700">Course List</h3>
                    <!-- Add New Course Button -->
                    <button id="addNewCourseBtn" class="bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition duration-200">
                        Add New Course
                    </button>
                </div>

                <!-- Course List Table -->
                <table class="min-w-full bg-white border border-gray-200" id="courseTable">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b text-left">Course Name</th>
                            <th class="py-3 px-4 border-b text-left">Category</th>
                            <th class="py-3 px-4 border-b text-left">Status</th>
                            <th class="py-3 px-4 border-b text-left">Due Date</th>
                            <th class="py-3 px-4 border-b text-left">Progress</th>
                            <th class="py-3 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="courseTableBody">
                        <!-- Dynamic content will be injected here -->
                    </tbody>
                </table>
            </div>

            <!-- Add/Edit Course Modal -->
            <div id="courseModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-3xl w-full">
                    <h2 id="modalTitle" class="text-2xl font-bold mb-6 text-center text-gray-800">Add/Edit Course</h2>
                    <form id="courseForm" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="courseName" class="block text-sm font-medium text-gray-700 mb-2">Course Name</label>
                            <input type="text" id="courseName" placeholder="Enter Course Name" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-blue-300 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="courseCategory" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                            <input type="text" id="courseCategory" placeholder="Enter Category" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-blue-300 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="courseStatus" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select id="courseStatus" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-blue-300 focus:border-blue-500">
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div>
                            <label for="courseDueDate" class="block text-sm font-medium text-gray-700 mb-2">Due Date</label>
                            <input type="date" id="courseDueDate" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-blue-300 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="courseProgress" class="block text-sm font-medium text-gray-700 mb-2">Progress (%)</label>
                            <input type="number" id="courseProgress" placeholder="Enter Progress (%)" class="p-4 border border-gray-300 rounded-lg w-full focus:ring focus:ring-blue-300 focus:border-blue-500" required min="0" max="100">
                        </div>
                        <div class="md:col-span-2 flex justify-end space-x-4 mt-6">
                            <button type="submit" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring focus:ring-blue-300">Save Course</button>
                            <button type="button" onclick="hideModal()" class="bg-gray-600 text-white p-3 rounded-lg hover:bg-gray-700 transition duration-200 focus:outline-none focus:ring focus:ring-gray-300">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                let courses = [{
                        name: 'JavaScript Basics',
                        category: 'IT',
                        status: 'active',
                        dueDate: '2024-09-30',
                        progress: 65
                    },
                    {
                        name: 'Finance for Managers',
                        category: 'Finance',
                        status: 'pending',
                        dueDate: '2024-10-10',
                        progress: 30
                    },
                    {
                        name: 'Leadership Skills',
                        category: 'HR',
                        status: 'completed',
                        dueDate: '2024-08-15',
                        progress: 100
                    }
                ];

                let isEditing = false;
                let editingIndex = null;

                const courseTableBody = document.getElementById('courseTableBody');
                const activeCount = document.getElementById('activeCount');
                const pendingCount = document.getElementById('pendingCount');
                const completedCount = document.getElementById('completedCount');
                const addNewCourseBtn = document.getElementById('addNewCourseBtn');
                const courseModal = document.getElementById('courseModal');
                const courseForm = document.getElementById('courseForm');
                const modalTitle = document.getElementById('modalTitle');
                const courseNameInput = document.getElementById('courseName');
                const courseCategoryInput = document.getElementById('courseCategory');
                const courseStatusInput = document.getElementById('courseStatus');
                const courseDueDateInput = document.getElementById('courseDueDate');
                const courseProgressInput = document.getElementById('courseProgress');

                // Show course modal for adding/editing
                function showModal(edit = false) {
                    if (edit) {
                        modalTitle.textContent = "Edit Course";
                    } else {
                        modalTitle.textContent = "Add New Course";
                        courseForm.reset();
                    }
                    courseModal.classList.remove('hidden');
                }

                // Hide course modal
                function hideModal() {
                    courseModal.classList.add('hidden');
                }

                // Render course list
                function renderCourses() {
                    courseTableBody.innerHTML = '';
                    let activeCourses = 0;
                    let pendingCourses = 0;
                    let completedCourses = 0;

                    courses.forEach((course, index) => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                    <td class="py-3 px-4 border-b">${course.name}</td>
                    <td class="py-3 px-4 border-b">${course.category}</td>
                    <td class="py-3 px-4 border-b text-${course.status === 'active' ? 'green-600' : course.status === 'pending' ? 'yellow-600' : 'gray-600'}">
                        ${course.status.charAt(0).toUpperCase() + course.status.slice(1)}
                    </td>
                    <td class="py-3 px-4 border-b">${course.dueDate}</td>
                    <td class="py-3 px-4 border-b">
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-blue-600 h-3 rounded-full" style="width: ${course.progress}%;"></div>
                        </div>
                        <span class="text-sm">${course.progress}%</span>
                    </td>
                    <td class="py-3 px-4 border-b">
                        <button class="text-blue-600 hover:underline" onclick="editCourse(${index})">Edit</button> |
                        <button class="text-red-600 hover:underline" onclick="deleteCourse(${index})">Delete</button>
                    </td>
                `;
                        courseTableBody.appendChild(row);

                        // Update course counts
                        if (course.status === 'active') activeCourses++;
                        if (course.status === 'pending') pendingCourses++;
                        if (course.status === 'completed') completedCourses++;
                    });

                    activeCount.textContent = activeCourses;
                    pendingCount.textContent = pendingCourses;
                    completedCount.textContent = completedCourses;
                }

                // Add or Edit course form submission
                courseForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const newCourse = {
                        name: courseNameInput.value,
                        category: courseCategoryInput.value,
                        status: courseStatusInput.value,
                        dueDate: courseDueDateInput.value,
                        progress: courseProgressInput.value
                    };

                    if (isEditing) {
                        // Update existing course
                        courses[editingIndex] = newCourse;
                        isEditing = false;
                        editingIndex = null;
                    } else {
                        // Add new course
                        courses.push(newCourse);
                    }

                    renderCourses();
                    hideModal();
                });

                // Edit course
                function editCourse(index) {
                    isEditing = true;
                    editingIndex = index;
                    const course = courses[index];
                    courseNameInput.value = course.name;
                    courseCategoryInput.value = course.category;
                    courseStatusInput.value = course.status;
                    courseDueDateInput.value = course.dueDate;
                    courseProgressInput.value = course.progress;
                    showModal(true);
                }

                // Delete course
                function deleteCourse(index) {
                    courses.splice(index, 1);
                    renderCourses();
                }

                // Show modal when "Add New Course" button is clicked
                addNewCourseBtn.addEventListener('click', () => showModal(false));

                // Hide modal on clicking outside or pressing escape
                window.addEventListener('click', (e) => {
                    if (e.target === courseModal) hideModal();
                });
                window.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') hideModal();
                });

                // Initial render
                renderCourses();
            </script>
        </div>
</body>

</html>