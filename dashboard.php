<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <title>Human Resources 2</title>
    <style>
        .hidden {
            display: none;
        }

        .custom-dropdown-content {
            left: auto;
            right: 0;
        }

        .card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .button-active {
            background-color: #3b82f6;
            color: white;
        }

        .button-inactive {
            background-color: #9ca3af;
            color: white;
        }

        .table-header {
            background-color: #f7f7f7;
        }
    </style>
</head>

<style>
    .custom-bg {
        background-color: #fbfbfe;
    }
</style>

<body class="custom-bg">

    <class class="flex">
        <!-- Sidebar -->
        <div class="fixed top-0 left-0 w-64 border-r bg-blue-600 text-white h-screen flex flex-col">
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
                <li>
                    <a href="index.php" class="flex items-center justify-between py-2 px-4 font-semibold rounded transition-colors duration-300 ease-in-out hover:bg-blue-700">
                        <span>Logout</span>
                        <img class="w-5 h-5 ml-3" src="icons/logout.png" alt="Logout Icon">
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-6 overflow-auto flex flex-col bg-gray-100 ml-64">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6">
                <div class="col-span-4">
                    <h2 class="text-4xl font-bold text-gray-800">Dashboard</h2>
                </div>
                <div class="col-span-1 flex justify-end">
                    <div class="relative">
                        <button id="datePickerButton" class="bg-blue-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-blue-700 transition duration-300 flex items-center">
                            <span class="mr-2">Pick a Date</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
                            </svg>
                        </button>
                        <input type="date" id="datePicker" class="hidden absolute mt-1 border border-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                </div>
            </div>

            <!-- Key Metrics -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-blue-600 p-4 rounded-lg text-white shadow-lg hover:shadow-xl transition-shadow hover:scale-105">
                    <h3 class="text-sm font-semibold">Total Active Courses</h3>
                    <p class="text-3xl font-bold">10</p>
                </div>
                <div class="bg-yellow-500 p-4 rounded-lg text-white shadow-lg hover:shadow-xl transition-shadow hover:scale-105">
                    <h3 class="text-sm font-semibold">Total Participants</h3>
                    <p class="text-3xl font-bold">30</p>
                </div>
                <div class="bg-green-600 p-4 rounded-lg text-white shadow-lg hover:shadow-xl transition-shadow hover:scale-105">
                    <h3 class="text-sm font-semibold">Participants in Training Session</h3>
                    <p class="text-3xl font-bold">20</p>
                </div>
                <div class="bg-red-600 p-4 rounded-lg text-white shadow-lg hover:shadow-xl transition-shadow hover:scale-105">
                    <h3 class="text-sm font-semibold">Absentee Rate</h3>
                    <p class="text-3xl font-bold">0.5%</p>
                </div>
            </div>

            <canvas id="myChart"></canvas>

            <!-- Training Topics and Employee Performance -->
            <div class="bg-white shadow-lg rounded-lg p-4 mb-4 flex-grow text-sm transition-transform transform hover:shadow-xl">
                <h3 class="text-lg font-semibold mb-4 border-b pb-1">Training Topics and Employee Performance</h3>
                <table class="w-full table-auto text-xs">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-3 border-b">Employee</th>
                            <th class="p-3 border-b">Department</th>
                            <th class="p-3 border-b">Training Program</th>
                            <th class="p-3 border-b">Performance</th>
                            <th class="p-3 border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-2">EJ</td>
                            <td class="border p-2">HR</td>
                            <td class="border p-2">Effective Communication Skills</td>
                            <td class="border p-2 font-semibold text-blue-600">80%</td>
                            <td class="border p-2"><span class="text-orange-500 font-semibold">In Progress</span></td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-2">Aaron</td>
                            <td class="border p-2">IT</td>
                            <td class="border p-2">Introduction to Cybersecurity</td>
                            <td class="border p-2 font-semibold text-blue-600">0%</td>
                            <td class="border p-2"><span class="text-red-500 font-semibold">In Progress</span></td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border p-2">Christian</td>
                            <td class="border p-2">Finance</td>
                            <td class="border p-2">Financial Reporting and Analysis</td>
                            <td class="border p-2 font-semibold text-blue-600">100%</td>
                            <td class="border p-2"><span class="text-green-500 font-semibold">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <!-- Training Hours vs Target Participants -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-4 w-full md:w-1/3 text-sm transition-transform transform hover:scale-105">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-1 border-gray-300">Training Hours vs. Target Participants</h3>
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-center">
                            <div class="flex flex-col items-center mr-4">
                                <h4 class="text-center text-xs font-semibold">HR</h4>
                                <div class="h-8 w-8 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold shadow-lg">75%</div>
                            </div>
                            <div class="flex-grow">
                                <div class="bg-gray-300 rounded-full h-2">
                                    <div class="bg-blue-600 rounded-full h-2 transition-all duration-300" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex flex-col items-center mr-4">
                                <h4 class="text-center text-xs font-semibold">IT</h4>
                                <div class="h-8 w-8 flex items-center justify-center rounded-full bg-green-600 text-white font-bold shadow-lg">100%</div>
                            </div>
                            <div class="flex-grow">
                                <div class="bg-gray-300 rounded-full h-2">
                                    <div class="bg-green-600 rounded-full h-2 transition-all duration-300" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex flex-col items-center mr-4">
                                <h4 class="text-center text-xs font-semibold">Finance</h4>
                                <div class="h-8 w-8 flex items-center justify-center rounded-full bg-red-600 text-white font-bold shadow-lg">50%</div>
                            </div>
                            <div class="flex-grow">
                                <div class="bg-gray-300 rounded-full h-2">
                                    <div class="bg-red-600 rounded-full h-2 transition-all duration-300" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Active Training Sessions -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-4 w-full md:w-1/3 text-sm transition-transform transform hover:scale-105">
                    <h3 class="text-lg font-semibold mb-4 border-b pb-2 border-gray-300">Total Active Training Sessions</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                            <span class="font-bold text-blue-600">1</span>
                            <span class="font-semibold text-gray-700">Effective Communication Skills</span>
                        </div>
                        <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                            <span class="font-bold text-blue-600">2</span>
                            <span class="font-semibold text-gray-700">Introduction to Cybersecurity</span>
                        </div>
                        <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                            <span class="font-bold text-blue-600">3</span>
                            <span class="font-semibold text-gray-700">Financial Reporting and Analysis</span>
                        </div>
                        <div class="flex justify-between p-2 bg-gray-100 rounded hover:bg-blue-50 transition-colors">
                            <span class="font-bold text-blue-600">4</span>
                            <span class="font-semibold text-gray-700">Defensive Driving Techniques</span>
                        </div>
                    </div>
                </div>

                <!-- Participants by Department -->
                <div class="bg-white shadow-lg rounded-lg p-6 mb-4 w-full md:w-1/3 text-sm transition-transform transform hover:scale-105">
                    <h3 class="text-sm font-semibold mb-2 border-b pb-1 border-gray-300">Participants by Department</h3>
                    <table class="w-full table-auto text-xs">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="text-left p-1 border-b text-gray-600">Department</th>
                                <th class="text-left p-1 border-b text-gray-600">Participants</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100 transition-colors">
                                <td class="border p-1">HR</td>
                                <td class="border p-1">10</td>
                            </tr>
                            <tr class="hover:bg-gray-100 transition-colors">
                                <td class="border p-1">IT</td>
                                <td class="border p-1">10</td>
                            </tr>
                            <tr class="hover:bg-gray-100 transition-colors">
                                <td class="border p-1">Finance</td>
                                <td class="border p-1">10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                document.getElementById('datePickerButton').addEventListener('click', function() {
                    const datePicker = document.getElementById('datePicker');
                    datePicker.classList.toggle('hidden'); // Show/hide the date picker
                    datePicker.focus(); // Set focus on the date picker input
                });

                document.getElementById('datePicker').addEventListener('change', function() {
                    const selectedDate = this.value;
                    const dateButton = document.getElementById('datePickerButton').querySelector('span');
                    dateButton.innerText = `Date: ${selectedDate}`; // Show the selected date on the button
                    this.classList.add('hidden'); // Hide the date picker after selection
                });
                // Initial chart setup
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['HR', 'IT', 'Finance'], // Initial labels
                        datasets: [{
                            label: 'Skill Proficiency',
                            data: [75, 100, 50], // Initial data points
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100,
                                ticks: {
                                    stepSize: 20
                                }
                            }
                        },
                        responsive: true
                    }
                });

                // Show the modal form when "Update Chart" button is clicked
                document.getElementById('openModalButton').addEventListener('click', function() {
                    document.getElementById('chartModal').classList.remove('hidden');
                });

                // Handle form submission and update the chart
                document.getElementById('saveChartButton').addEventListener('click', function() {
                    // Get values from the form
                    const label1 = document.getElementById('label1').value || 'HR';
                    const value1 = document.getElementById('value1').value || 60;
                    const label2 = document.getElementById('label2').value || 'IT';
                    const value2 = document.getElementById('value2').value || 80;
                    const label3 = document.getElementById('label3').value || 'Finance';
                    const value3 = document.getElementById('value3').value || 70;

                    // Update chart data
                    myChart.data.labels = [label1, label2, label3];
                    myChart.data.datasets[0].data = [value1, value2, value3];
                    myChart.update();

                    // Hide the modal after saving
                    document.getElementById('chartModal').classList.add('hidden');
                });
            </script>
        </div>
    </class>

</body>

</html>