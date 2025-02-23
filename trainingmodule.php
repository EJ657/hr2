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
    <title>Human Resources - Training Module</title>
</head>

<body class="custom-bg">
   <?php include("sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
        <?php include("navbar.php"); ?>
        <!-- Content Section -->
        <div class="mt-16">
            <!-- Enrollment Learning Module Form -->
            <form id="enrollmentForm" class="p-8 bg-white rounded-lg shadow-md max-w-4xl mx-auto space-y-6 mt-16">

                <!-- Employee Name -->
                <div class="mb-6">
                    <label for="employeeName" class="block text-gray-700 font-medium mb-2 text-xl">Select Employee:</label>
                    <select id="employeeName" class="block w-full border border-gray-300 rounded-lg p-4 focus:ring focus:ring-[#00446b] text-lg">
                        <option value="">-- Select Employee --</option>
                        <!-- Options will be dynamically populated here -->
                    </select>
                </div>

                <!-- Select Module -->
                <div class="mb-6">
                    <label for="module" class="block text-gray-700 font-medium mb-2 text-xl">Select Module:</label>
                    <select id="module" class="block w-full border border-gray-300 rounded-lg p-4 focus:ring focus:ring-[#00446b] text-lg">
                        <option value="">-- Select Module --</option>
                        <option value="Module 1">Defensive Driving Techniques</option>
                        <option value="Module 2">Customer Service Fundamentals</option>
                        <option value="Module 3">Bus Repair and Maintenance Basics</option>
                        <option value="Module 4">Effective Communication Skills</option>
                        <option value="Module 5">Emergency Response Procedures</option>
                        <option value="Module 6">Conflict Resolution in the Workplace</option>
                        <option value="Module 7">Digital Marketing Essentials</option>
                        <option value="Module 8">Financial Reporting and Analysis</option>
                        <option value="Module 9">Leadership and Management Skills</option>
                        <option value="Module 10">Supply Chain Management Basics</option>
                        <option value="Module 11">Fleet and Transportation Management</option>
                        <option value="Module 12">Route Planning and Optimization</option>
                        <option value="Module 13">Health and Safety Training</option>
                        <option value="Module 14">Complaint Handling and Resolution</option>
                        <option value="Module 15">Vehicle Operations and Safety</option>
                    </select>
                </div>

                <!-- Enroll Button -->
                <button type="button" id="enrollButton" class="w-full bg-[#00446b] text-white rounded-lg p-4 text-lg hover:bg-[#00446be8] transition duration-300">Enroll Employee</button>
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
                const module = document.getElementById('module').value;

                // Validate the form fields
                if (employeeName && module) {
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