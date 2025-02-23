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
    <style>
        /* Custom styles for hover effects and animations */
        .hover-scale {
            transition: transform 0.2s ease-in-out;
        }
        .hover-scale:hover {
            transform: scale(1.05);
        }
        .modal-overlay {
            background: rgba(0, 0, 0, 0.5);
        }
        .modal-open #topNavBar {
            opacity: 0.5;
        }
    </style>
</head>

<body class="custom-bg">
    <div class="flex"></div>
    <!-- Sidebar -->
    <?php include("sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
        <div id="topNavBar">
            <?php include("navbar.php"); ?>
        </div>

        <!-- Account Review Request -->
        <div class="px-5 py-16">
            <h2 class="text-2xl font-semibold mb-6 text-[#00446b]">Account Review Requests</h2>
            <div class="overflow-x-auto">
                <table class="table-auto w-full bg-white rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-[#00446b] text-white uppercase text-sm leading-normal">
                            <th class="py-4 px-6 text-left">Email</th>
                            <th class="py-4 px-6 text-left">Reason for Request</th>
                            <th class="py-4 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class='border-b border-gray-200 hover:bg-gray-50 transition-colors'>
                            <td class='py-4 px-6 text-left whitespace-nowrap'>example@example.com</td>
                            <td class='py-4 px-6 text-left'>Forgot password due to multiple attempts</td>
                            <td class='py-4 px-6 text-center'>
                                <button class='bg-[#00446b] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#002b4d] transition-colors hover-scale' onclick="openModal('example@example.com')">Approve</button>
                                <button class='bg-red-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-600 transition-colors hover-scale ml-2'>Reject</button>
                            </td>
                        </tr>
                        <tr class='border-b border-gray-200 hover:bg-gray-50 transition-colors'>
                            <td class='py-4 px-6 text-left whitespace-nowrap'>user@example.com</td>
                            <td class='py-4 px-6 text-left'>Unable to access email for reset</td>
                            <td class='py-4 px-6 text-center'>
                                <button class='bg-[#00446b] text-white px-4 py-2 rounded-lg font-semibold    hover:bg-[#002b4d] transition-colors hover-scale' onclick="openModal('user@example.com')">Approve</button>
                                <button class='bg-red-500 text-white px-4 py-2 rounded-lg font-semibold  hover:bg-red-600 transition-colors hover-scale ml-2'>Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center modal-overlay">
            <div class="bg-white rounded-lg shadow-lg p-6 w-1/3 transform transition-transform hover-scale">
                <h2 class="text-xl font-semibold mb-4 text-[#00446b]">Change Password</h2>
                <div class="mb-4">
                    <label for="newPassword" class="block text-gray-700 mb-2">New Password</label>
                    <input type="password" id="newPassword" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00446b]">
                </div>
                <div class="flex justify-end space-x-4">
                    <button onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors">Cancel</button>
                    <button onclick="savePassword()" class="bg-[#00446b] text-white px-4 py-2 rounded-lg hover:bg-[#002b4d] transition-colors">Save</button>
                </div>
            </div>
        </div>

        <script>
            function openModal(email) {
                document.getElementById('modal').classList.remove('hidden');
                document.body.classList.add('modal-open');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal() {
                document.getElementById('modal').classList.add('hidden');
                document.body.classList.remove('modal-open');
                document.body.classList.remove('overflow-hidden');
            }

            function savePassword() {
                const newPassword = document.getElementById('newPassword').value;
                if (newPassword) {
                    alert(`Password saved for the selected account.`);
                    closeModal();
                } else {
                    alert('Please enter a new password.');
                }
            }

            window.onclick = function(event) {
                const modal = document.getElementById('modal');
                if (event.target == modal) {
                    closeModal();
                }
            }

            // Close profile and logout modals when clicking outside
            window.onclick = function(event) {
                const profileModal = document.getElementById('profileModal');
                const logoutModal = document.getElementById('logoutModal');
                if (event.target == profileModal) {
                    profileModal.classList.add('hidden');
                }
                if (event.target == logoutModal) {
                    logoutModal.classList.add('hidden');
                }
            }
        </script>
    </div>
</body>

</html>