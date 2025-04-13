<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Personal</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-red-900 text-white">

    <!-- Edit Personal Section -->
    <div id="personaldiv" class="max-w-4xl mx-auto mt-10 p-8 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-4xl font-semibold text-yellow-400 mb-6">
            Edit JOb Info for {{$worker->surname}} {{$worker->firstname}}
        </h1>

        <form action="{{route('sendeditjob')}}" method="POST">
            @csrf
            <div class="space-y-4">
                  <!-- id -->
                  <div class="hidden">
                    <label for="id" class="block text-yellow-300 font-medium mb-2">id</label>
                    <input 
                        type="text" 
                        name="id" 
                        id="id" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->id}}" 
                        required>
                </div>
                <div>
                    <label for="rank" class="text-white">Rank</label>
                    <input type="text" name="rank" id="rank" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="staff_id" class="text-white">Staff ID</label>
                    <input type="text" name="staff_id" id="staff_id" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="date_of_enlishment" class="text-white">Date of Enlishment</label>
                    <input type="date" name="date_of_enlishment" id="date_of_enlishment" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="height" class="text-white">Height</label>
                    <input type="text" name="height" id="height" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="shirt_size" class="text-white">Shirt Size</label>
                    <input type="text" name="shirt_size" id="shirt_size" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="cap_beret_size" class="text-white">Cap and Beret size</label>
                    <input type="text" name="cap_beret_size" id="cap_beret_size" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="boot_size" class="text-white">Boot size</label>
                    <input type="text" name="boot_size" id="boot_size" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="shoe_size" class="text-white">Shoe size</label>
                    <input type="text" name="shoe_size" id="shoe_size" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="disciplinary" class="text-white">Disciplinary</label>
                    <input type="text" name="disciplinary" id="disciplinary" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="station" class="text-white">Station</label>
                    <input type="text" name="station" id="station" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="previous_station" class="text-white">Previous Station</label>
                    <input type="text" name="previous_station" id="previous_station" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="department" class="text-white">Department</label>
                    <input type="text" name="department" id="department" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="previous_department" class="text-white">Previous Department</label>
                    <input type="text" name="previous_department" id="previous_department" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
                <div>
                    <label for="retirement_date" class="text-white">Retirement Date</label>
                    <input type="text" name="retirement_date" id="retirement_date" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                </div>
             
            </div>

            <button 
                type="submit" 
                class="w-full py-3 mt-6 bg-yellow-500 text-red-900 font-semibold rounded-lg hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-300">
                Submit
            </button>
        </form>
    </div>

</body>
</html>
