<?php
include("connection.php");
include("auth.php"); // Include the authentication file
checkAuth(); // Call the function to check if user is authenticated

// Include tasks.php to access the task arrays
include("tasks.php");

// Get the module from the URL
$module = isset($_GET['module']) ? $_GET['module'] : 'defensive_driving';

// Select the appropriate task array based on the module
$tasks = [];
if ($module === 'defensive_driving') {
    $tasks = $defensive_driving;
} elseif ($module === 'customer_service') {
    $tasks = $customer_service;
} elseif ($module === 'bus_repair') {
    $tasks = $bus_repair;
} elseif ($module === 'communication_skills') {
    $tasks = $communication_skills;
} elseif ($module === 'emergency_response') {
    $tasks = $emergency_response;
} elseif ($module === 'conflict_resolution') {
    $tasks = $conflict_resolution;
} elseif ($module === 'digital_marketing') {
    $tasks = $digital_marketing;
} elseif ($module === 'financial_reporting') {
    $tasks = $financial_reporting;
} elseif ($module === 'leadership_management') {
    $tasks = $leadership_management;
} elseif ($module === 'supply_chain') {
    $tasks = $supply_chain;
} elseif ($module === 'fleet_management') {
    $tasks = $fleet_management;
} elseif ($module === 'route_planning') {
    $tasks = $route_planning;
} elseif ($module === 'health_safety') {
    $tasks = $health_safety;
} elseif ($module === 'complaint_handling') {
    $tasks = $complaint_handling;
} elseif ($module === 'vehicle_operations') {
    $tasks = $vehicle_operations;
} 

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'assigned';

// Ensure user_id is set before using it
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$canAccessForm = false; // Default: No access

if ($userId) {
    $query = "SELECT usertype FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $canAccessForm = ($row && $row['usertype'] === 'admin'); // Check if user is admin
}

$validationResults = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($tasks as $index => $task) {
        $userAnswer = isset($_POST["option-$index"]) ? $_POST["option-$index"] : '';
        $validationResults[$index] = ($userAnswer === $task['answer']);
    }
}
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
            <a href="?module=<?php echo $module; ?>&tab=assigned" class="tab tab-bordered <?php echo $activeTab == 'assigned' ? 'tab-active' : ''; ?>">Assigned</a>
            <a href="?module=<?php echo $module; ?>&tab=missing" class="tab tab-bordered <?php echo $activeTab == 'missing' ? 'tab-active' : ''; ?>">Missing</a>
            <a href="?module=<?php echo $module; ?>&tab=complete" class="tab tab-bordered <?php echo $activeTab == 'complete' ? 'tab-active' : ''; ?>">Complete</a>
        </div>

        <div class="mt-8 p-5 border rounded-lg">
            <?php if ($activeTab == 'assigned'): ?>
                <form method="POST">
                    <p class="font-bold text-lg">Module Task</p>
                    <?php foreach ($tasks as $index => $task): ?>
                        <div id="task-<?php echo $index; ?>">
                            <h3><strong>Question:</strong> <?php echo $task["question"]; ?></h3>
                            <ul>
                                <?php foreach ($task["option"] as $option): ?>
                                    <li>
                                        <input type="radio" name="option-<?php echo $index; ?>" value="<?php echo $option; ?>">
                                        <?php echo $option; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php if (isset($validationResults[$index])): ?>
                                <?php if ($validationResults[$index]): ?>
                                    <p class="text-green-500">Correct</p>
                                <?php else: ?>
                                    <p class="text-red-500">Incorrect</p>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                    <button type="submit" class="mt-4 bg-blue-950 text-white px-4 py-2 rounded-lg">Submit Answers</button>
                </form>
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
</body>

</html>