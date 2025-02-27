<?php
include("connection.php");
include("auth.php"); // Include authentication file
checkAuth(); // Ensure user authentication

include("lessons.php"); // Include the lessons array

// Get the lesson key from the URL
$lessonKeyParam = isset($_GET['lesson']) ? $_GET['lesson'] : 'defensive_driving';

// Define the modules array with different types of URLs
$modules = [
    ["name" => "Defensive Driving Techniques", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=defensive_driving"],
    ["name" => "Customer Service Fundamentals", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=customer_service"],
    ["name" => "Bus Repair and Maintenance Basics", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=bus_repair"],
    ["name" => "Effective Communication Skills", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=communication_skills"],
    ["name" => "Emergency Response Procedures", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=emergency_response"],
    ["name" => "Conflict Resolution in the Workplace", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=conflict_resolution"],
    ["name" => "Digital Marketing Essentials", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=digital_marketing"],
    ["name" => "Financial Reporting and Analysis", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=financial_reporting"],
    ["name" => "Leadership and Management Skills", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=leadership_management"],
    ["name" => "Supply Chain Management Basics", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=supply_chain"],
    ["name" => "Fleet and Transportation Management", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=fleet_management"],
    ["name" => "Route Planning and Optimization", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=route_planning"],
    ["name" => "Health and Safety Training", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=health_safety"],
    ["name" => "Complaint Handling and Resolution", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=complaint_handling"],
    ["name" => "Vehicle Operations and Safety", "description" => "Click to view details.", "link" => "lessonLayout.php?lesson=vehicle_operations"],
];

// Check if the lesson exists in the array
if (array_key_exists($lessonKeyParam, $lessonKey)) {
    $lessonContent = $lessonKey[$lessonKeyParam]; // Get the lesson content
} else {
    die("<div class='text-center mt-10 text-red-500 font-bold text-lg'>Lesson not found.</div>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson</title>
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

        <!-- Lesson Content -->
        <div class="mt-16 p-5 border rounded-lg bg-white">
            <?php echo $lessonContent; ?> <!-- Display lesson content -->
        </div>
    </div>
</body>

</html>