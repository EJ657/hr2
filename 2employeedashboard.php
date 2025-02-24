<?php
include("connection.php");
include("auth.php"); // Include the authentication file
checkAuth(); // Call the function to check if user is authenticated

$modules = [
    ["name" => "Defensive Driving Techniques", "description" => "Click to view details.", "link" => "3defensivedrivingtechniques.php"],
    ["name" => "Customer Service Fundamentals", "description" => "Click to view details.", "link" => "3customerservicefundamentals.php"],
    ["name" => "Bus Repair and Maintenance Basics", "description" => "Click to view details.", "link" => "3busrepairandmaintenancebasics.php"],
    ["name" => "Effective Communication Skills", "description" => "Click to view details.", "link" => "3effectivecommunicationskills.php"],
    ["name" => "Emergency Response Procedures", "description" => "Click to view details.", "link" => "3emergencyresponseprocedures.php"],
    ["name" => "Conflict Resolution in the Workplace", "description" => "Click to view details.", "link" => "3conflictresolutionintheworkplace.php"],
    ["name" => "Digital Marketing Essentials", "description" => "Click to view details.", "link" => "3digitalmarketingessentials.php"],
    ["name" => "Financial Reporting and Analysis", "description" => "Click to view details.", "link" => "3financialreportingandanalysis.php"],
    ["name" => "Leadership and Management Skills", "description" => "Click to view details.", "link" => "3leadershipandmanagementskills.php"],
    ["name" => "Supply Chain Management Basics", "description" => "Click to view details.", "link" => "3supplychainmanagementbasics.php"],
    ["name" => "Fleet and Transportation Management", "description" => "Click to view details.", "link" => "3fleetandtransportationmanagement.php"],
    ["name" => "Route Planning and Optimization", "description" => "Click to view details.", "link" => "3routeplanningandoptimization.php"],
    ["name" => "Health and Safety Training", "description" => "Click to view details.", "link" => "3healthandsafetytraining.php"],
    ["name" => "Complaint Handling and Resolution", "description" => "Click to view details.", "link" => "3complainthandlingandresolution.php"],
    ["name" => "Vehicle Operations and Safety", "description" => "Click to view details.", "link" => "3vehicleoperationsandsafety.php"],
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
            <?php foreach ($modules as $module): ?>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold mb-2"><?php echo $module['name']; ?></h3>
                        <p class="text-gray-600 mb-4"><?php echo $module['description']; ?></p>
                    </div>
                    <a href="<?php echo $module['link']; ?>" class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-[#00446b] self-start">View Details</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>