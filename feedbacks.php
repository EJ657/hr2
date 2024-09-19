<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body class="bg-gray-100">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen p-4">
            <h1 class="text-lg font-bold">Employee Management</h1>
            <ul class="mt-4">
                <li class="my-2">
                    <a href="index.php" class="block p-2 hover:bg-gray-700 rounded">Competency Management</a>
                </li>
                <li class="my-2">
                    <a href="learning.php" class="block p-2 hover:bg-gray-700 rounded">Learning Management</a>
                </li>
                <li class="my-2">
                    <a href="training.php" class="block p-2 hover:bg-gray-700 rounded">Training Management</a>
                </li>
                <li class="my-2">
                    <a href="feedbacks.php" class="block p-2 hover:bg-gray-700 rounded">Feedbacks</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100 h-screen overflow-y-auto">
            <h2 class="text-2xl font-semibold mb-4">Feedbacks</h2>

            <!-- Search Section -->
            <div class="flex items-center mb-4">
                <input type="text" id="searchBar" oninput="filterItems()" placeholder="Search..." class="p-2 border border-gray-300 rounded mr-2 flex-1">
            </div>
        </div>
    </div>
    </body>
</html>
