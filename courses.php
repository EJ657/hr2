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
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Courses Dashboard</h2>

            <!-- Course Overview Section -->
            <div class="flex flex-wrap gap-6 mb-6">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-5 rounded-lg shadow-lg text-white relative hover:shadow-xl transition duration-200 flex-1 min-w-[220px] flex flex-col justify-between">
                    <h3 class="text-sm font-medium">Active Courses</h3>
                    <p class="text-4xl font-bold" id="activeCount">12</p>
                </div>
                <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 p-5 rounded-lg shadow-lg text-white relative hover:shadow-xl transition duration-200 flex-1 min-w-[220px] flex flex-col justify-between">
                    <h3 class="text-sm font-medium">Pending Courses</h3>
                    <p class="text-4xl font-bold" id="pendingCount">5</p>
                </div>
                <div class="bg-gradient-to-r from-green-500 to-green-600 p-5 rounded-lg shadow-lg text-white relative hover:shadow-xl transition duration-200 flex-1 min-w-[220px] flex flex-col justify-between">
                    <h3 class="text-sm font-medium">Total Employees</h3>
                    <p class="text-4xl font-bold" id="totalEmployees">50</p>
                </div>
            </div>

            <!-- Course List Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-gray-700">Course List</h3>
                    <div class="flex space-x-4">
                        <div>
                            <label class="text-gray-700 font-medium mr-2">Status:</label>
                            <select id="courseStatus" class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300 transition duration-150">
                                <option value="">All</option>
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-gray-700 font-medium mr-2">Category:</label>
                            <select id="courseCategory" class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300 transition duration-150">
                                <option value="">All Categories</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="HR">HR</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" id="searchCourses" placeholder="Search Courses..." class="p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300 transition duration-150">
                        </div>
                    </div>
                </div>

                <!-- Course List Table -->
                <table class="min-w-full bg-white border border-gray-200" id="courseTable">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b text-left">Course Name</th>
                            <th class="py-3 px-4 border-b text-left">Category</th>
                            <th class="py-3 px-4 border-b text-left">Status</th>
                            <th class="py-3 px-4 border-b text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="courseTableBody">
                        <!-- Dynamic content will be injected here -->
                    </tbody>
                </table>

                <div class="flex flex-col sm:flex-row gap-6">
                    <!-- Add New Course Form -->
                    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
                        <h3 class="text-lg font-bold mb-4">Add New Course</h3>
                        <form id="addCourseForm" class="flex flex-col space-y-3">
                            <input type="text" id="newCourseName" placeholder="Course Name" class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
                            <input type="text" id="newCourseCategory" placeholder="Category" class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300" required>
                            <select id="newCourseStatus" class="border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300">
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                            <button type="submit" class="bg-blue-600 text-white rounded-lg px-4 py-2 hover:bg-blue-700 transition duration-200">Add Course</button>
                        </form>
                    </div>

                    <!-- Current Course Progress Section -->
                    <div class="bg-white p-6 rounded-lg shadow-lg w-full">
                        <h3 class="text-xl font-bold text-gray-700 mb-4">Current Course Progress</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Course Topic Items -->
                            <div class="bg-gray-50 p-4 rounded-lg shadow">
                                <h4 class="text-lg font-bold text-gray-700 mb-1">Advanced JavaScript</h4>
                                <p class="text-sm text-gray-500 mb-2">Due: <span class="font-medium">Sep 30, 2024</span></p>
                                <div class="relative pt-1">
                                    <div class="flex mb-1 items-center justify-between">
                                        <div class="text-sm font-medium text-blue-600">Progress</div>
                                        <div class="text-sm text-gray-600">65%</div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3">
                                        <div class="bg-blue-600 h-3 rounded-full" style="width: 65%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg shadow">
                                <h4 class="text-lg font-bold text-gray-700 mb-1">Leadership Skills</h4>
                                <p class="text-sm text-gray-500 mb-2">Due: <span class="font-medium">Oct 10, 2024</span></p>
                                <div class="relative pt-1">
                                    <div class="flex mb-1 items-center justify-between">
                                        <div class="text-sm font-medium text-blue-600">Progress</div>
                                        <div class="text-sm text-gray-600">80%</div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3">
                                        <div class="bg-blue-600 h-3 rounded-full" style="width: 80%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg shadow">
                                <h4 class="text-lg font-bold text-gray-700 mb-1">Excel for Data Analysis</h4>
                                <p class="text-sm text-gray-500 mb-2">Due: <span class="font-medium">Nov 5, 2024</span></p>
                                <div class="relative pt-1">
                                    <div class="flex mb-1 items-center justify-between">
                                        <div class="text-sm font-medium text-blue-600">Progress</div>
                                        <div class="text-sm text-gray-600">45%</div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3">
                                        <div class="bg-blue-600 h-3 rounded-full" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const courses = [{
                        name: 'JavaScript Basics',
                        category: 'IT',
                        status: 'active'
                    },
                    {
                        name: 'Finance for Managers',
                        category: 'Finance',
                        status: 'pending'
                    },
                ];

                const courseTableBody = document.getElementById('courseTableBody');
                const activeCount = document.getElementById('activeCount');
                const pendingCount = document.getElementById('pendingCount');

                function renderCourses() {
                    courseTableBody.innerHTML = '';
                    let activeCourses = 0;
                    let pendingCourses = 0;

                    courses.forEach(course => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                <td class="py-3 px-4 border-b">${course.name}</td>
                <td class="py-3 px-4 border-b">${course.category}</td>
                <td class="py-3 px-4 border-b text-${course.status === 'active' ? 'green-600' : 'yellow-600'}">${course.status.charAt(0).toUpperCase() + course.status.slice(1)}</td>
                <td class="py-3 px-4 border-b">
                    <button class="text-blue-600 hover:underline" onclick="viewCourse('${course.name}')">View</button> |
                    <button class="text-red-600 hover:underline" onclick="deleteCourse('${course.name}')">Delete</button>
                </td>
            `;
                        courseTableBody.appendChild(row);
                        if (course.status === 'active') activeCourses++;
                        if (course.status === 'pending') pendingCourses++;
                    });

                    activeCount.textContent = activeCourses;
                    pendingCount.textContent = pendingCourses;
                }

                function viewCourse(name) {
                    alert(`Viewing course: ${name}`);
                }

                function deleteCourse(name) {
                    const index = courses.findIndex(course => course.name === name);
                    if (index !== -1) {
                        courses.splice(index, 1);
                        renderCourses();
                    }
                }

                document.getElementById('addCourseForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    const newCourse = {
                        name: document.getElementById('newCourseName').value,
                        category: document.getElementById('newCourseCategory').value,
                        status: document.getElementById('newCourseStatus').value
                    };
                    courses.push(newCourse);
                    renderCourses();
                    this.reset();
                });

                renderCourses();
            </script>

        </div>
</body>

</html>