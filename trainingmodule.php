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
    <title>Human Resources - Training Module</title>
</head>

<body class="custom-bg">
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
                    <h2 class="text-4xl font-semibold text-gray-800">Training Module</h2>
                </div>
            </div>

            <!-- Enrollment Training Module Form -->
            <form id="enrollmentForm" class="p-8 bg-white rounded-lg shadow-md max-w-lg mx-auto">

                <!-- Employee Name -->
                <div class="mb-6">
                    <label for="employeeName" class="block text-gray-700 font-medium mb-2">Select Employee:</label>
                    <select id="employeeName" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-[#00446b]">
                        <option value="">-- Select Employee --</option>
                        <!-- Options will be dynamically populated here -->
                    </select>
                </div>

                <!-- Employee Email -->
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Employee Email:</label>
                    <input type="email" id="email" required placeholder="example@gmail.com" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-[#00446b]" />
                </div>

                <!-- Select Module -->
                <div class="mb-6">
                    <label for="module" class="block text-gray-700 font-medium mb-2">Select Module:</label>
                    <select id="module" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-[#00446b]">
                        <option value="">-- Select Module --</option>
                        <option value="Module 1">Defensive Driving Techniques</option>
                        <option value="Module 2">Customer Service Fundamentals</option>
                        <option value="Module 3">Bus Repair and Maintenance Basics</option>
                        <option value="Module 4">Effective Communication Skills</option>
                        <option value="Module 5">Emergency Response Procedures</option>
                        <option value="Module 6">Conflict Resolution in the Workplace</option>
                        <option value="Module 7">Digital Marketing Essentials</option>
                        <option value="Module 8">Financial Reporting and Analysis</option>
                        <option value="Module 9">Introduction to Cybersecurity</option>
                        <option value="Module 10">Supply Chain Management Basics</option>
                    </select>
                </div>

                <!-- Department -->
                <div class="mb-6">
                    <label for="department" class="block text-gray-700 font-medium mb-2">Department:</label>
                    <select id="department" class="block w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-[#00446b]">
                        <option value="">-- Select Department --</option>
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

                <!-- Enroll Button -->
                <button type="button" id="enrollButton" class="w-full bg-[#00446b] text-white rounded-lg p-3 hover:bg-[#00446be8] transition duration-300">Enroll Employee</button>
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
                const module = document.getElementById('module').value;
                const department = document.getElementById('department').value;

                // Validate the form fields
                if (employeeName && email && module && department) {
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