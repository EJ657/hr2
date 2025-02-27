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
    <title>Employee Feedback</title>
</head>

<body class="custom-bg">
    <!-- Sidebar -->
    <?php include("5sidebar.php"); ?>

    <!-- Main Content -->
    <div class="flex-grow p-6 mt-8 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
        <!-- Top Navigation Bar -->
        <?php include("5navbar.php"); ?>

        <!-- Content Section -->
        <div class="container mx-auto p-6 mt-8 px-auto py-auto bg-white rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mb-6 text-blue-950">Submit Your Feedback</h2>

            <!-- Static Feedback Form -->
            <form class="space-y-4">
                <div class="form-control">
                    <label for="feedback" class="label text-lg font-medium text-gray-600">Your Feedback</label>
                    <textarea id="feedback" rows="5" class="textarea textarea-bordered w-full p-4 text-lg font-medium text-gray-600" placeholder="Write your feedback here..."></textarea>
                </div>

                <!-- Review Rating -->
                <div class="form-control">
                    <label for="rating" class="label text-lg font-medium text-gray-600">How would you rate your experience?</label>
                    <div class="flex space-x-4">
                        <button type="button" id="positive-review" class="btn btn-primary bg-blue-950 hover:bg-blue-900 text-white font-medium text-lg p-4 rounded-lg w-24">
                            <i class="fas fa-smile text-lg"></i>
                        </button>
                        <button type="button" id="negative-review" class="btn btn-error bg-red-500 hover:bg-red-600 text-white font-medium text-lg p-4 rounded-lg w-24">
                            <i class="fas fa-frown text-lg"></i>
                        </button>
                    </div>
                    <input type="hidden" id="rating" name="rating" value="">
                </div>
                <button type="submit" class="btn btn-primary bg-blue-950 hover:bg-blue-900 text-white font-medium text-lg p-4 rounded-lg w-full">Submit Feedback</button>
            </form>
        </div>
    </div>

</body>

</html>