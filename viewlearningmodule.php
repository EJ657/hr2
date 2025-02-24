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
    <title>Human Resources 2</title>
</head>

<body>
    <div class="flex"></div>
    <!-- Sidebar -->
   <?php include("sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
       <?php include("navbar.php"); ?>

        <!-- Content Section -->
        <div class="mt-12">
            <!-- Module Request List Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold text-gray-700">Employee Module Requests</h3>
                </div>

                <!-- Module Request List Table -->
                <table class="min-w-full bg-white border border-gray-200" id="moduleRequestTable">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border-b">Employee Email</th>
                            <th class="py-3 px-4 border-b">Module Name</th>
                            <th class="py-3 px-4 border-b">Request Date</th>
                            <th class="py-3 px-4 border-b">Status</th>
                            <th class="py-3 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="moduleRequestTableBody">
                        <!-- Dynamic content will be injected here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        let moduleRequests = [];

        const moduleRequestTableBody = document.getElementById('moduleRequestTableBody');

        // Fetch module requests from the database
        function fetchModuleRequests() {
            fetch('get_module_requests.php')
                .then(response => response.json())
                .then(data => {
                    moduleRequests = data;
                    renderModuleRequests();
                })
                .catch(error => console.error('Error fetching module requests:', error));
        }

        // Render module request list
        function renderModuleRequests() {
            moduleRequestTableBody.innerHTML = '';

            moduleRequests.forEach((request, index) => {
                const row = document.createElement('tr');
                row.innerHTML =
                    `<td class="py-3 px-4 border-b">${request.employee_name}</td>
                     <td class="py-3 px-4 border-b">${request.employee_email}</td>
                     <td class="py-3 px-4 border-b">${request.module_name}</td>
                     <td class="py-3 px-4 border-b">${request.request_date}</td>
                     <td class="py-3 px-4 border-b text-${request.status === 'approved' ? 'green-600' : request.status === 'rejected' ? 'red-600' : 'yellow-600'}">
                         ${request.status.charAt(0).toUpperCase() + request.status.slice(1)}
                     </td>
                     <td class="py-3 px-4 border-b">
                         <button class="text-green-600 hover:underline" onclick="approveRequest(${request.id})">Approve</button> |
                         <button class="text-red-600 hover:underline" onclick="rejectRequest(${request.id})">Reject</button>
                     </td>`;
                moduleRequestTableBody.appendChild(row);
            });
        }

        // Approve request function
        function approveRequest(requestId) {
            fetch('module_request_handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'approve',
                        id: requestId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        fetchModuleRequests();
                    } else {
                        alert('Error approving request: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Reject request function
        function rejectRequest(requestId) {
            fetch('module_request_handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        action: 'reject',
                        id: requestId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        fetchModuleRequests();
                    } else {
                        alert('Error rejecting request: ' + data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Initialize
        fetchModuleRequests();
    </script>
</body>

</html>