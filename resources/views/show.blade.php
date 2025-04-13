<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Firemen</title>
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
    


    <div class="grid grid-cols-10 gap-8 p-8">
        <!-- Profile Section -->
        <div class="col-span-2 text-center bg-red-600 p-4 rounded-lg shadow-lg">
            <img src="{{ asset('storage/' . $worker->profile_pic) }}" alt="Profile" class="w-44 ml-9 h-44 transform hover:scale-110 transition-all" />
            <h2 class="text-xl text-yellow-200"> Executive Officer</h2>
            <div class="bg-white p-1 rounded-lg mt-3">
                <h1 class="text-2xl font-semibold text-black">Profile</h1>
                <div class="space-y-1 text-black">
                    <div>
                        <h2 class="text-lg font-semibold">Full Name:</h2>
                        <p>{{ $worker->surname }} {{ $worker->firstname }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Date of Birth:</h2>
                        <p>{{ $worker->dob }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Place of Birth:</h2>
                        <p>{{ $worker->pob }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Place of Birth:</h2>
                        <p>{{ $worker->merital }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Place of Birth:</h2>
                        <p>{{ $worker->spouse }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Place of Birth:</h2>
                        <p>{{ $worker->number_children }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Place of Birth:</h2>
                        <p>{{ $worker->Names_children }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Place of Birth:</h2>
                        <p>{{ $worker->age }} years</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Gender:</h2>
                        <p>{{ $worker->sex }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Gender:</h2>
                        <p>{{ $worker->languages }}</p>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold">Gender:</h2>
                        <p>{{ $worker->qualificaton }}</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('editpersonal', ['id' => $worker->id]) }}" 
                class="mt-4 text-white bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded-lg inline-block">
                Edit
             </a>
             <form action="{{ route('delete', ['id' => $worker->id]) }}" method="POST" class="inline-block" 
                onsubmit="return confirm('Are you sure you want to delete this person?');">
              @csrf
              @method('DELETE')
              <button type="submit" 
                      class="mt-4 text-white bg-red-900 hover:bg-yellow-400 px-4 py-2 rounded-lg">
                  Delete Person
              </button>
          </form>
          
            
            </div>
    
        <!-- Main Info Section -->
        <div class="col-span-8 flex space-x-8">
            <!-- Contact Info -->
            <div class="flex-1 bg-black p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-4 text-yellow-500">Contact Information</h1>
                <div class="space-y-2 text-white">
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Phone:</h2>
                        <p>{{ $worker->contact }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Email:</h2>
                        <p>{{ $worker->email }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Residential Address:</h2>
                        <p>{{ $worker->residential_address }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Postal Address:</h2>
                        <p>{{ $worker->postal_address }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Next of Kin:</h2>
                        <p>{{ $worker->kin_name }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Next of Kin's Phone:</h2>
                        <p>{{ $worker->kin_phone }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Name of bank:</h2>
                        <p>{{ $worker->bank }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Account Number:</h2>
                        <p>{{ $worker->bank_number }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Voters Number:</h2>
                        <p>{{ $worker->voters_number }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Voters Number:</h2>
                        <p>{{ $worker->national_id }}</p>
                    </div>
                </div>
                    <a href="{{ route('editcontact', ['id' => $worker->id]) }}" 
                        class="mt-4 text-white bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded-lg inline-block">
                        Edit
                    </a>
                </div>
    
            <!-- Job Info -->
            <div class="flex-1 bg-black p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-4 text-yellow-500">Job Information</h1>
                <div class="space-y-2 text-white">
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Job Title:</h2>
                        <p>{{ $worker->rank }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Staff ID:</h2>
                        <p>{{ $worker->staff_id }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Date of Enlishment:</h2>
                        <p>{{ $worker->enlishment_date }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Height:</h2>
                        <p>{{ $worker->height }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Shirt Size:</h2>
                        <p>{{ $worker->shirt_size }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Shirt Size:</h2>
                        <p>{{ $worker->cap_beret_size }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Boot Size:</h2>
                        <p>{{ $worker->boot_size }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Shoe Size:</h2>
                        <p>{{ $worker->shoe_size }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Disciplinary:</h2>
                        <p>{{ $worker->disciplinary }}</p>
                    </div>
                    
                </div>
                <a href="{{ route('editjob', ['id' => $worker->id]) }}" 
                    class="mt-4 text-white bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded-lg inline-block">
                    Edit
                </a>           
             </div>
    
            <!-- Health Info -->
            <div class="flex-1 bg-black p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-4 text-yellow-500">Health Information</h1>
                <div class="space-y-2 text-white">
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Blood Group:</h2>
                        <p>{{ $worker->blood_type }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Sickle Cell:</h2>
                        <p>{{ $worker->sickle }}</p>
                    </div>
                    <div class="border border-yellow-500 p-4 rounded">
                        <h2 class="text-lg font-semibold">Medical Challenge:</h2>
                        <p>{{ $worker->medical_conditions }}</p>
                    </div>
                  
                </div>
                    <a href="{{ route('edithealth', ['id' => $worker->id]) }}" 
                        class="mt-4 text-white bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded-lg inline-block">
                        Edit
                    </a> 
                </div>
        </div>
    </div>


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

                    // model
                    const personal=document.getElementById('profileedit');
                    const personaldiv=document.getElementById('personaldiv');

                </script>          
</body>
</html>
