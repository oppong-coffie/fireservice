<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS link -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js CDN -->
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-red-600 p-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <!-- Email Logo -->
            <a href="mailto:example@firestation.com" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8l-9 6-9-6"></path><path d="M21 16l-9-6-9 6"></path></svg>
            </a>
            <span class="text-white text-xl font-semibold">Fire Station</span>
        </div>

        <!-- Station Time (Dynamic) -->
        <div class="text-white text-lg" id="station-time"></div>
    </nav>










            <!-- Footer (Optional) -->
            <div class="text-center text-gray-500 mt-8">
                <p>&copy; 2024 Fire Service Admin Dashboard. All rights reserved.</p>
            </div>

    <script>
        // Function to update station time dynamically
        function updateTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds}`;
            document.getElementById('station-time').textContent = timeString;
        }

        // Update the time every second
        setInterval(updateTime, 1000);
        updateTime(); // Initial call to set the time immediately
    </script>

</body>
</html>
