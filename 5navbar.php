<!-- Navbar -->
<div class="fixed top-0 left-72 right-0 z-50 bg-white shadow-md">
    <div class="flex justify-between items-center py-3 px-6 border-b-2 border-gray-200">
        <div>
            <h2 class="text-3xl font-bold text-[#00446b]">Employee Modules</h2>
        </div>
        <div class="flex items-center space-x-6">
            <!-- Profile Dropdown -->
            <div class="relative">
                <img id="profileIcon" src="icons/defaultprofile.png" alt="Profile Icon"
                    class="w-9 h-9 cursor-pointer rounded-full border-2 border-[#00446b] hover:border-[#002b4d] transition-all"
                    onclick="toggleProfileDropdown()">

                <!-- Dropdown Menu -->
                <div id="profileDropdown"
                    class="hidden absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg z-50">
                    <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 transition-colors"
                        onclick="openProfileModal()">
                        <img id="dropdownProfileIcon" src="icons/defaultprofile.png" alt="Profile Icon"
                            class="w-6 h-6 mr-3 rounded-full">
                        <span>Profile</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 transition-colors"
                        onclick="openLogoutModal()">
                        <i class="fas fa-sign-out-alt w-6 h-6 mr-3 text-gray-700"></i>
    
                        <span>Log Out</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Profile Modal -->
<div id="profileModal"
    class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-[9999]">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
        <h2 class="text-xl font-semibold mb-4 text-[#00446b]">Profile Details</h2>
        <div class="mb-4">
            <label for="profileImage" class="block text-gray-700">Profile Image</label>
            <select id="profileImage"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#00446b]">
                <option value="defaultprofile.png">Default</option>
                <option value="mblack.png">Male 1</option>
                <option value="myellow.png">Male 2</option>
                <option value="gblack.png">Female 1</option>
                <option value="gyellow.png">Female 2</option>
                <option value="dog.png">Dog</option>
                <option value="cat.png">Cat</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="profileName" class="block text-gray-700">Name</label>
            <input type="text" id="profileName" class="w-full border rounded px-3 py-2 bg-gray-100 focus:outline-none"
                placeholder="Employee" disabled>
        </div>
        <div class="mb-4">
            <label for="profileEmail" class="block text-gray-700">Email</label>
            <input type="email" id="profileEmail" class="w-full border rounded px-3 py-2 focus:outline-none"
                value="employee@gmail.com" disabled>
        </div>
        <div class="mb-4">
            <label for="profileRole" class="block text-gray-700">Role</label>
            <input type="text" id="profileRole" class="w-full border rounded px-3 py-2 focus:outline-none" value="employee"
                disabled>
        </div>
        <div class="flex justify-end">
            <button onclick="saveProfileDetails()"
                class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-[#002b4d] transition-colors">Save</button>
        </div>
    </div>
</div>

<!-- Logout Modal -->
<div id="logoutModal"
    class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-[9999]">
    <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
        <h2 class="text-xl font-semibold mb-4 text-[#00446b]">Log Out</h2>
        <p class="mb-4 text-gray-700">Are you sure you want to log out?</p>
        <div class="flex justify-end space-x-4">
            <button onclick="closeLogoutModal()"
                class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition-colors">Cancel</button>
            <a href="logout.php"
                class="bg-[#00446b] text-white px-4 py-2 rounded hover:bg-[#002b4d] transition-colors">Log Out</a>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    // Toggle profile dropdown visibility
    function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        dropdown.classList.toggle('hidden');
    }

    // Open profile modal
    function openProfileModal() {
        document.getElementById('profileModal').classList.remove('hidden');
    }

    // Close profile modal
    function closeProfileModal() {
        document.getElementById('profileModal').classList.add('hidden');
    }

    // Load profile details
    function loadProfileDetails() {
        const image = localStorage.getItem('profileImage');
        if (image) {
            document.getElementById('profileImage').value = image;
            document.getElementById('profileIcon').src = 'icons/' + image;
            document.getElementById('dropdownProfileIcon').src = 'icons/' + image;
        }
    }

    // Save profile details
    function saveProfileDetails() {
        const image = document.getElementById('profileImage').value;
        localStorage.setItem('profileImage', image);
        document.getElementById('profileIcon').src = 'icons/' + image;
        document.getElementById('dropdownProfileIcon').src = 'icons/' + image;
        closeProfileModal();
    }

    // Open logout modal
    function openLogoutModal() {
        document.getElementById('logoutModal').classList.remove('hidden');
    }

    // Close logout modal
    function closeLogoutModal() {
        document.getElementById('logoutModal').classList.add('hidden');
    }

    // Close modals and dropdowns if clicked outside
    window.onclick = function (event) {
        const profileModal = document.getElementById('profileModal');
        const logoutModal = document.getElementById('logoutModal');
        const profileDropdown = document.getElementById('profileDropdown');

        if (event.target === profileModal) closeProfileModal();
        if (event.target === logoutModal) closeLogoutModal();
        if (!event.target.closest('.relative') && profileDropdown && !profileDropdown.classList.contains('hidden')) {
            profileDropdown.classList.add('hidden');
        }
    }

    // Load profile details on page load
    window.onload = function () {
        loadProfileDetails();
    }
</script>
