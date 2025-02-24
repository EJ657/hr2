<?php
include("connection.php");
include("auth.php"); // Include the authentication file
checkAuth(); // Call the function to check if user is authenticated

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'assigned';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Status</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.2/dist/full.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./icons/nexfleet.svg">
</head>

<body class="custom-bg">
    <!-- Sidebar -->
    <?php include("5sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
        <?php include("5navbar.php"); ?>

        <!-- Content Section -->
        <div class="tabs mt-16">
            <a href="?tab=assigned" class="tab tab-bordered <?php echo $activeTab == 'assigned' ? 'tab-active' : ''; ?>">Assigned</a>
            <a href="?tab=missing" class="tab tab-bordered <?php echo $activeTab == 'missing' ? 'tab-active' : ''; ?>">Missing</a>
            <a href="?tab=complete" class="tab tab-bordered <?php echo $activeTab == 'complete' ? 'tab-active' : ''; ?>">Complete</a>
        </div>

        <div class="mt-8 p-5 border rounded-lg">
            <?php if ($activeTab == 'assigned'): ?>
                <p class="text-lg font-semibold">Google Form Link:</p>
                <a href="https://docs.google.com/forms/d/e/your-google-form-link" target="_blank" class="text-blue-500 underline">Click here to fill out the form</a>
            <?php elseif ($activeTab == 'missing'): ?>
                <div class="flex flex-col items-center">
                    <span class="text-xl font-bold">No Data Shown Here</span>
                </div>
            <?php elseif ($activeTab == 'complete'): ?>
                <p class="text-lg font-semibold">Employee Completeness:</p>
                <ul class="list-disc pl-5">
                    <li>Employee 1 - Completed</li>
                    <li>Employee 2 - Completed</li>
                    <li>Employee 3 - Pending</li>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <a href="2employeemodules.php" class="fixed bottom-5 right-5 bg-blue-950 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-900">Go Back</a>
</body>

</html>