<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS link -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery CDN -->

</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-red-600 p-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <a href="mailto:example@firestation.com" class="text-white hover:text-yellow-300" title="Email Fire Station">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 8l-9 6-9-6"></path>
                    <path d="M21 16l-9-6-9 6"></path>
                </svg>
            </a>
            <span class="text-white text-xl font-semibold">Fire Station</span>
        </div>
          <!-- Middle Section: Navigation Links -->
    <div class="flex space-x-6">
        <a href="/" class="text-white hover:underline">Home</a>
        <a href="add" class="text-white hover:underline">New</a>
        <a href="all" class="text-white hover:underline">List</a>
    </div>
        <div class="text-white text-lg" id="station-time"></div>
    </nav>

    @if(session('message'))
    <div id="success-message" class="alert alert-success bg-green-700 text-xl p-2 text-white">
        {{ session('message') }}
    </div>
    @endif


    <!-- Dashboard Layout -->
    <div class="max-w-6xl mx-auto p-8 flex flex-col justify-between">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-semibold text-yellow-500 mb-4">Admin Dashboard</h1>
            <p class="text-xl text-gray-700">Welcome to the dashboard! Manage workers, view data insights, and more.</p>
        </div>

        <!-- Search Bar Section -->
     <!-- Search Bar Section -->
     <div class="mb-5">
        <input 
            type="text" 
            id="search-bar"
            class="w-full p-4 bg-gray-700 text-white rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-500" 
            placeholder="Search workers by surname..." 
            value="{{ request('search') }}">
    </div>

     <!-- Workers List Section (Initially Hidden) -->
     <div id="workers-list-container" class="hidden">
        @include('workers-list', ['workers' => $workers])
    </div>

   

     

        <!-- Add New Worker -->
        <a href="add" class="text-red-600 font-bold hover:underline" tabindex="0">Add New Worker</a>

        <!-- Statistics Section -->
        <div class="grid grid-cols-3 gap-6 mb-16">
            <div class="bg-gray-800 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold mb-4">Total Workers</h3>
                <p class="text-3xl font-bold">{{ $workers->count() }}</p>
                <a href="all" class="text-red-400 hover:underline">View All</a>
            </div>
            <div class="bg-blue-800 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold mb-4">Senior Workers</h3>
                <p class="text-3xl font-bold">{{ $workers->where('gender', 'Male')->count() }}</p>
            </div>
            <div class="bg-pink-800 text-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-xl font-semibold mb-4">Junior Workers</h3>
                <p class="text-3xl font-bold">{{ $workers->where('gender', 'Female')->count() }}</p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center text-gray-500">
            <p>&copy; 2024 Fire Service Admin Dashboard. All rights reserved.</p>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Function to update station time dynamically
        function updateTime() {
            const now = new Date();
            const hours = now.getHours() % 12 || 12;
            const amPm = now.getHours() >= 12 ? 'PM' : 'AM';
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds} ${amPm}`;
            document.getElementById('station-time').textContent = timeString;
        }

        // Update the time every second
        setInterval(updateTime, 1000);
        updateTime();

        // Function to handle search functionality
  
     
        $(document).ready(function() {
            $('#search-bar').on('input', function() {
                let query = $(this).val();

                      // Show or hide the workers list based on input
                      if (query.length > 0) {
                    $('#workers-list-container').removeClass('hidden'); // Show the list
                } else {
                    $('#workers-list-container').addClass('hidden'); // Hide the list if input is empty
                }
                
                // Send an AJAX request to the server
                $.ajax({
                    url: '{{ route('index') }}',
                    method: 'GET',
                    data: {
                        search: query
                    },
                    success: function(response) {
                        // Update the worker list with the response
                        $('#workers-list-container').html(response);
                    }
                });
            });
        });


    // JavaScript to remove the success message after 1 minute
    setTimeout(() => {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.remove();
        }
    }, 10000); // 60000 milliseconds = 1 minute
    </script>
</body>
</html>
