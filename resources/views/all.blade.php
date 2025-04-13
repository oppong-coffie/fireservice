<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workers List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900">
     <!-- Navbar -->
     <nav class="bg-red-600 p-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <!-- Email Logo -->
            <a href="mailto:example@firestation.com" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8l-9 6-9-6"></path><path d="M21 16l-9-6-9 6"></path></svg>
            </a>
            <span class="text-white text-xl font-semibold">Fire Station</span>
        </div>
                  <!-- Middle Section: Navigation Links -->
    <div class="flex space-x-6">
        <a href="/" class="text-white hover:underline">Home</a>
        <a href="add" class="text-white hover:underline">New</a>
        <a href="all" class="text-white hover:underline">List</a>
    </div>

        <!-- Station Time (Dynamic) -->
        <div class="text-white text-lg" id="station-time"></div>
    </nav>
    <p class="mt-4">
        @if(session('message'))
            <div class="alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                {{ session('message') }}
            </div>
        @endif
    
        @if(session('error'))
            <div class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                {{ session('error') }}
            </div>
        @endif
    </p>
    


    <div class="max-w-6xl mx-auto p-8 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-4xl font-semibold text-yellow-500 mb-6 text-center">Workers List</h1>

        <!-- Workers Table -->
        <table class="min-w-full bg-gray-800 text-white rounded-lg shadow-lg mx-auto">
            <thead>
                <tr class="bg-red-600">
                    <th class="p-4 text-left">Full Name</th>
                    <th class="p-4 text-left">Rank</th>
                    <th class="p-4 text-left">Station</th>
                    <th class="p-4 text-left">Department</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                @forelse ($workers as $worker)
                <a href="detail?id={{ $worker->surname }}">
                    <tr class="bg-gray-700 hover:bg-gray-600 transition-all ease-in-out duration-300 border-b-2 cursor-pointer"
                    data-url="{{ route('detail', ['id' => $worker->id]) }}"
                    onclick="window.location = this.dataset.url;"
                    tabindex="0" 
                    onkeydown="if(event.key === 'Enter') window.location = this.dataset.url;">
                    <td class="p-4">{{ $worker->surname }} {{ $worker->firstname }}</td>
                    <td class="p-4">{{ $worker->rank }}</td>
                    <td class="p-4">{{ $worker->station }}</td>
                    <td class="p-4">{{ $worker->department }}</td>
                </tr>
                
            </a>
            @empty
                <tr>
                    <td colspan="2" class="p-4 text-center">No workers found</td>
                </tr>
            @endforelse
            
               
   
            </tbody>
        </table>
    </div>


                <!-- Footer (Optional) -->
                <div class="text-center text-gray-500 mt-8">
                    <p>&copy; 2024 Fire Service Admin Dashboard. All rights reserved.</p>
                </div>


                <script>
                    setTimeout(() => {
                        const alerts = document.querySelectorAll('.alert');
                        alerts.forEach(alert => {
                            alert.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                            setTimeout(() => alert.remove(), 500); // Remove after transition
                        });
                
                        // Reload the window after alerts fade out
                        setTimeout(() => {
                            window.location.reload();
                        }, 500); // Delay for the fade-out transition to complete
                    }, 3000); // Show alert for 3 seconds
                </script>
                
</body>
</html>
