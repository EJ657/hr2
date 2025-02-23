<div class="fixed top-0 left-0 w-64 bg-white text-black border m-4 mr-0 rounded-lg overflow-hidden h-screen flex flex-col shadow-lg">
    <!-- Sidebar Content -->
    <div class="flex flex-col h-full bg-gray-100 p-4 space-y-4 overflow-y-auto scrollbar-hide">

        <!-- Logo Section -->
        <div class="flex items-center justify-center mt-2 mb-4">
            <a href="2employeedashboard.php" class="flex items-center">
                <img class="w-10 h-10 mr-2" src="icons/nexfleet.svg" alt="NextFleet Logo">
                <p class="font-bold text-2xl text-blue-950">NextFleet</p>
            </a>
        </div>

        <!-- Navigation -->
        <ul class="flex flex-col space-y-2">
            <!-- Dashboard -->
            <li>
                <a href="2employeedashboard.php" class="flex items-center py-3 px-4 font-semibold rounded-lg transition-all duration-300 text-blue-950 hover:bg-[#00446b] hover:text-white">
                    <i class="fas fa-tachometer-alt w-6 text-lg mr-3"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Module Tasks -->
            <li>
                <a href="2employeemodules.php" class="flex items-center py-3 px-4 font-semibold rounded-lg transition-all duration-300 text-blue-950 hover:bg-[#00446b] hover:text-white">
                    <i class="fas fa-lightbulb w-6 text-lg mr-3"></i>
                    <span>Module Tasks</span>
                </a>
            </li>

            <!-- Others -->
            <li>
                <details class="group" id="learningTraining">
                    <summary class="flex items-center justify-between py-3 px-4 font-semibold rounded-lg transition-all duration-300 text-blue-950 hover:bg-[#00446b] hover:text-white cursor-pointer">
                        <div class="flex items-center">
                            <i class="fas fa-chalkboard-teacher w-6 text-lg mr-3"></i>
                            <span>Others</span>
                        </div>
                        <i class="fas fa-chevron-down transition-transform"></i>
                    </summary>
                    <ul class="p-2 space-y-2 pl-6">
                        <li>
                            <a href="2concerns.php" class="sub-link flex items-center py-2 px-4 font-semibold rounded-lg transition-all duration-300 text-blue-950 hover:bg-[#00446b] hover:text-white">
                                <i class="fas fa-book w-6 text-lg mr-3"></i>
                                <span>Concerns</span>
                            </a>
                        </li>
                        <li>
                            <a href="2aboutus.php" class="sub-link flex items-center py-2 px-4 font-semibold rounded-lg transition-all duration-300 text-blue-950 hover:bg-[#00446b] hover:text-white">
                                <i class="fas fa-users w-6 text-lg mr-3"></i>
                                <span>About us</span>
                            </a>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    details[open] summary i {
        transform: rotate(180deg);
    }
</style>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Dropdown icon rotation */
    details[open] summary i {
        transform: rotate(180deg);
    }

    /* Dropdown content animation */
    details .dropdown-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
        opacity: 0;
    }

    details[open] .dropdown-content {
        max-height: 500px;
        /* Adjust based on your content */
        opacity: 1;
    }
</style>

<!-- FontAwesome for Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const submenus = ["learningTraining", "others"];

        submenus.forEach(menu => {
            let details = document.getElementById(menu);
            let summary = details.querySelector("summary");
            let dropdownContent = details.querySelector("ul");

            // Add the dropdown-content class to the ul element
            dropdownContent.classList.add("dropdown-content");

            // Handle click on the summary element
            summary.addEventListener("click", function(e) {
                e.preventDefault(); // Prevent default behavior
                if (details.hasAttribute("open")) {
                    // Close the dropdown
                    dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
                    setTimeout(() => {
                        dropdownContent.style.maxHeight = "0";
                        dropdownContent.style.opacity = "0";
                    }, 10);
                    setTimeout(() => details.removeAttribute("open"), 300);
                } else {
                    // Open the dropdown
                    details.setAttribute("open", "true");
                    dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
                    dropdownContent.style.opacity = "1";
                }
            });

            // Save the open state in localStorage
            let subLinks = details.querySelectorAll(".sub-link");
            subLinks.forEach(link => {
                link.addEventListener("click", function() {
                    localStorage.setItem("openMenu", menu);
                });
            });

            // Restore the open state from localStorage
            if (localStorage.getItem("openMenu") === menu) {
                details.setAttribute("open", "true");
                dropdownContent.style.maxHeight = "auto";
                dropdownContent.style.opacity = "1";
            }
        });

        // Reset localStorage when clicking outside
        document.body.addEventListener("click", function(event) {
            if (!event.target.closest("details")) {
                localStorage.removeItem("openMenu");
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const submenus = ["learningTraining", "others"];

        submenus.forEach(menu => {
            let details = document.getElementById(menu);
            let subLinks = details.querySelectorAll(".sub-link");

            subLinks.forEach(link => {
                link.addEventListener("click", function() {
                    localStorage.setItem("openMenu", menu);
                });
            });

            if (localStorage.getItem("openMenu") === menu) {
                details.setAttribute("open", "true");
            }
        });

        // Reset localStorage when clicking outside
        document.body.addEventListener("click", function(event) {
            if (!event.target.closest("details")) {
                localStorage.removeItem("openMenu");
            }
        });
    });
</script>