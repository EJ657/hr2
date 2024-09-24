<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Human Resources - Enroll New Employee</title>
    <style>
        .hidden {
            display: none;
        }

        .custom-bg {
            background-color: #fbfbfe;
        }

        /* Remove the blue outline on focus */
        input:focus {
            outline: none;
            box-shadow: none;
            /* Remove box shadow */
        }
    </style>
</head>

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
        <div class="flex-grow p-6 bg-gray-100 min-h-screen">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Enroll New Employee</h2>

            <!-- Enrollment Form -->
            <form id="enrollmentForm" class="p-8 bg-white rounded-lg shadow-md max-w-lg mx-auto">

                <!-- Employee Name -->
                <div class="mb-6">
                    <label for="employeeName" class="block text-gray-700 font-medium mb-2">Select Employee:</label>
                    <select id="employeeName" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300">
                        <option value="">-- Select Employee --</option>
                        <!-- Options will be dynamically populated here -->
                    </select>
                </div>

                <!-- Employee Email -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Employee Email:</label>
                    <input type="email" id="email" required placeholder="example@gmail.com" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300" />
                </div>

                <!-- Select Course -->
                <div class="mb-6">
                    <label for="course" class="block text-gray-700 font-medium mb-2">Select a Course:</label>
                    <select id="course" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300">
                        <option value="">-- Select Course --</option>
                        <option value="Course 1">Course 1</option>
                        <option value="Course 2">Course 2</option>
                    </select>
                </div>

                <!-- Department -->
                <div class="mb-6">
                    <label for="department" class="block text-gray-700 font-medium mb-2">Department:</label>
                    <select id="department" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300">
                        <option value="">-- Select Department --</option>
                        <option value="Department 1">Department 1</option>
                        <option value="Department 2">Department 2</option>
                    </select>
                </div>

                <!-- Enroll Button -->
                <button type="button" id="enrollButton" class="w-full bg-blue-600 text-white rounded-lg p-3 hover:bg-blue-700 transition duration-300">Enroll Employee</button>
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
                const email = document.getElementById('email').value.trim();
                const course = document.getElementById('course').value;
                const department = document.getElementById('department').value;

                // Validate the form fields
                if (employeeName && email && course && department) {
                    alert(`Employee ${employeeName} enrolled successfully!`);
                    document.getElementById('enrollmentForm').reset();
                } else {
                    alert('Please fill in all fields.');
                }
            });
        </script>

</body>

</html>