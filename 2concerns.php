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
    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./icons/nexfleet.svg">
    <title>Employee Concerns</title>
    <style>
        /* Ensure the message container takes up the remaining space */
        .message-container {
            flex-grow: 1;
            overflow-y: auto;
            padding-bottom: 80px; /* Space for the chatbox */
        }
        /* Sticky chatbox */
        .chatbox {
            position: fixed;
            bottom: 0;
            left: 16rem; /* Adjust based on sidebar width */
            right: 0;
            background: white;
            padding: 1rem;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
        /* Ensure the body and html take full height */
        html, body {
            height: 100%;
            margin: 0;
        }
        /* Main container */
        .main-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        /* Contact list styling */
        .contact-list {
            width: 300px;
            border-left: 1px solid #e5e7eb;
            background: #f9fafb;
            overflow-y: auto;
        }
        .contact-item {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            cursor: pointer;
            transition: background 0.2s;
        }
        .contact-item:hover {
            background: #e5e7eb;
        }
        /* Avatar Container */
        .avatar-container {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e5e7eb;
        }
        .avatar-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="custom-bg">
    <div class="main-container">
        <!-- Sidebar -->
        <?php include("5sidebar.php"); ?>

        <!-- Main Content -->
        <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
            <!-- Top Navigation Bar -->
            <?php include("5navbar.php"); ?>

            <!-- Enhanced Realtime Messaging System -->
            <div class="flex h-full mt-24">
                <!-- Message Container -->
                <div class="flex-grow message-container p-4 bg-white rounded-lg shadow-md">
                    <div id="messages" class="space-y-4">
                        <!-- Messages will be dynamically loaded here -->
                    </div>
                </div>

                <!-- Contact List -->
                <div class="contact-list">
                    <h3 class="p-4 text-lg font-semibold border-b">Contacts</h3>
                    <!-- Sample Contacts with Auto-Generated Profile Images -->
                    <div class="contact-item">
                        <div class="flex items-center">
                            <div class="avatar-container">
                                <img src="https://api.dicebear.com/7.x/initials/svg?seed=JohnDoe" alt="John Doe">
                            </div>
                            <div class="ml-3">
                                <p class="font-semibold">John Doe</p>
                                <p class="text-sm text-gray-500">Online</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="flex items-center">
                            <div class="avatar-container">
                                <img src="https://api.dicebear.com/7.x/initials/svg?seed=JaneSmith" alt="Jane Smith">
                            </div>
                            <div class="ml-3">
                                <p class="font-semibold">Jane Smith</p>
                                <p class="text-sm text-gray-500">Offline</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="flex items-center">
                            <div class="avatar-container">
                                <img src="https://api.dicebear.com/7.x/initials/svg?seed=AliceJohnson" alt="Alice Johnson">
                            </div>
                            <div class="ml-3">
                                <p class="font-semibold">Alice Johnson</p>
                                <p class="text-sm text-gray-500">Online</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="flex items-center">
                            <div class="avatar-container">
                                <img src="https://api.dicebear.com/7.x/initials/svg?seed=BobBrown" alt="Bob Brown">
                            </div>
                            <div class="ml-3">
                                <p class="font-semibold">Bob Brown</p>
                                <p class="text-sm text-gray-500">Away</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Chatbox at the Bottom -->
        <div class="chatbox mx-6 rounded-t-xl w-[1100px]">
            <div class="flex items-center space-x-4">
                <!-- Emoji Picker (Placeholder) -->
                <button class="p-2 text-gray-600 hover:text-blue-500 transition-colors">
                    <i class="far fa-smile text-xl"></i>
                </button>

                <!-- File Upload Button -->
                <label for="fileInput" class="p-2 text-gray-600 hover:text-blue-500 transition-colors cursor-pointer">
                    <i class="fas fa-paperclip text-xl"></i>
                    <input id="fileInput" type="file" class="hidden">
                </label>

                <!-- Message Input -->
                <input id="messageInput" type="text" class="flex-grow border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type your message...">

                <!-- Send Button -->
                <button id="sendButton" class="p-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                    <i class="fas fa-paper-plane text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Function to add a message to the chat
        function addMessage(message, isOwnMessage = false, isFile = false, timestamp = null) {
            const messageContainer = document.createElement('div');
            messageContainer.classList.add('flex', isOwnMessage ? 'justify-end' : 'justify-start', 'items-end', 'space-x-2');

            const messageBubble = document.createElement('div');
            messageBubble.classList.add('max-w-xs', 'px-4', 'py-2', 'rounded-lg', 'shadow-md', isOwnMessage ? 'bg-blue-500' : 'bg-gray-100', isOwnMessage ? 'text-white' : 'text-gray-800');

            if (isFile) {
                const fileLink = document.createElement('a');
                fileLink.href = message;
                fileLink.target = '_blank';
                fileLink.textContent = 'View Attachment';
                fileLink.classList.add('underline', 'hover:text-blue-400');
                messageBubble.appendChild(fileLink);
            } else {
                messageBubble.textContent = message;
            }

            // Add timestamp
            const time = document.createElement('div');
            time.classList.add('text-xs', 'text-gray-500', 'mt-1');
            time.textContent = timestamp || new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            messageBubble.appendChild(time);

            messageContainer.appendChild(messageBubble);
            document.getElementById('messages').appendChild(messageContainer);
            document.getElementById('messages').scrollTop = document.getElementById('messages').scrollHeight;
        }

        // Event listener for the send button
        document.getElementById('sendButton').addEventListener('click', function() {
            const messageInput = document.getElementById('messageInput');
            const fileInput = document.getElementById('fileInput');
            const message = messageInput.value.trim();

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();
                reader.onload = function(e) {
                    addMessage(e.target.result, true, true);
                    // Here you would typically send the file to the server
                };
                reader.readAsDataURL(file);
                fileInput.value = '';
            } else if (message) {
                addMessage(message, true);
                messageInput.value = '';
                // Here you would typically send the message to the server
            }
        });

        // Function to simulate receiving a message from another user
        function receiveMessage(message, isFile = false) {
            addMessage(message, false, isFile);
        }

        // Example of receiving a message from another user
        setTimeout(() => {
            receiveMessage('Hello! How can I help you today?');
        }, 2000);
    </script>
</body>

</html>