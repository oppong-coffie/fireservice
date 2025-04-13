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
            Edit Health Info for {{$worker->surname}} {{$worker->firstname}}
        </h1>

        <form action="{{route('sendedithealth')}}" method="POST">
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
                <label for="medical_conditions" class="text-white">Medical Challenged</label>
                <input type="text" name="medical_conditions" id="medical_conditions" class="w-full p-3 rounded-lg bg-gray-700 text-white">
            </div>
            <div>
                <label for="allergies" class="text-white">Sickle Cell</label>
                <input type="text" name="allergies" id="allergies" class="w-full p-3 rounded-lg bg-gray-700 text-white">
            </div>
            <div>
                <label for="blood_type" class="text-white">Blood Type</label>
                <select name="blood_type" id="blood_type" class="w-full p-3 rounded-lg bg-gray-700 text-white">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
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
