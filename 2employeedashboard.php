<?php
include("connection.php");
include("auth.php"); // Include the authentication file
checkAuth(); // Call the function to check if user is authenticated

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./icons/nexfleet.svg">
    <title>Human Resources 2</title>
</head>

<body class="custom-bg">
    <!-- Sidebar -->
    <?php include("5sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
        <?php include("5navbar.php"); ?>

        <!-- Content Section -->
        <div class="mt-14 grid grid-cols-3 gap-4">
            <?php foreach ($modules as $lesson): ?>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold mb-2"><?php echo $lesson['name']; ?></h3>
                        <p class="text-gray-600 mb-4"><?php echo $lesson['description']; ?></p>
                    </div>
                    <a href="<?php echo $lesson['link']; ?>" class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-[#00446b] self-start">View Details</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>