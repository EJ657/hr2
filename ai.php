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
  <title>Admin Feedback Analysis</title>
</head>

<body class="custom-bg">
  <!-- Sidebar -->
  <?php include("sidebar.php"); ?>

  <!-- Main Content -->
  <div class="flex-grow p-6 mt-8 overflow-auto flex flex-col bg-[#fbfbfe] ml-64">
    <!-- Top Navigation Bar -->
    <?php include("navbar.php"); ?>
    <!-- Content Section -->
    <div class="container mx-auto p-6">
      <h2 class="text-3xl font-bold mb-6">Feedback Analysis</h2>

      <!-- Static Feedback Table -->
      <div class="overflow-hidden bg-white shadow sm:rounded-lg mb-8">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Submitted Feedback</h3>
        </div>
        <div class="border-t border-gray-200">
          <dl>
            <!-- Static Feedback Example #1 -->
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4">
              <dt class="text-sm font-medium text-gray-500">Feedback #1</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">The team is great, and the work environment is excellent.</dd>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2"><strong>Sentiment: </strong>Positive</dd>
            </div>

            <!-- Static Feedback Example #2 -->
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4">
              <dt class="text-sm font-medium text-gray-500">Feedback #2</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">I feel that the team communication could be improved.</dd>
              <dd class="mt-1 text-sm text-gray-900 sm:col-span-2"><strong>Sentiment: </strong>Negative</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>

</body>

</html>