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
            Edit Personal Info for {{$worker->surname}} {{$worker->firstname}}
        </h1>

        <form action="{{route('sendeditpersonal')}}" method="POST">
            @csrf

            <div class="space-y-6">
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

                <!-- First Name -->
                <div>
                    <label for="firstname" class="block text-yellow-300 font-medium mb-2">First Name</label>
                    <input 
                        type="text" 
                        name="firstname" 
                        id="firstname" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->firstname}}" 
                        required>
                </div>

                <!-- Surname -->
                <div>
                    <label for="surname" class="block text-yellow-300 font-medium mb-2">Surname</label>
                    <input 
                        type="text" 
                        name="surname" 
                        id="surname" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->surname}}" 
                        required>
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="dob" class="block text-yellow-300 font-medium mb-2">Date of Birth</label>
                    <input 
                        type="date" 
                        name="dob" 
                        id="dob" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->dob}}" 
                        required>
                </div>

                <!-- Place of Birth -->
                <div>
                    <label for="pob" class="block text-yellow-300 font-medium mb-2">Place of Birth</label>
                    <input 
                        type="text" 
                        name="pob" 
                        id="pob" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->pob}}" 
                        required>
                </div>

                <!-- Marital Status -->
                <div>
                    <label for="marital_status" class="block text-yellow-300 font-medium mb-2">Marital Status</label>
                    <select 
                        name="marital_status" 
                        id="marital_status" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        required>
                        <option value="">--select--</option>
                        <option value="married" {{$worker->marital_status == 'married' ? 'selected' : ''}}>Married</option>
                        <option value="single" {{$worker->marital_status == 'single' ? 'selected' : ''}}>Single</option>
                        <option value="divorced" {{$worker->marital_status == 'divorced' ? 'selected' : ''}}>Divorced</option>
                    </select>
                </div>

                <!-- Spouse -->
                <div>
                    <label for="spouse" class="block text-yellow-300 font-medium mb-2">Spouse</label>
                    <input 
                        type="text" 
                        name="spouse" 
                        id="spouse" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->spouse}}" 
                        required>
                </div>

                <!-- Number of Children -->
                <div>
                    <label for="num_children" class="block text-yellow-300 font-medium mb-2">Number of Children</label>
                    <input 
                        type="text" 
                        name="num_children" 
                        id="num_children" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->num_children}}" 
                        required>
                </div>

                <!-- Name of Children -->
                <div>
                    <label for="names_children" class="block text-yellow-300 font-medium mb-2">Name of Children</label>
                    <input 
                        type="text" 
                        name="names_children" 
                        id="names_children" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->names_children}}" 
                        required>
                </div>

                <!-- Age -->
                <div>
                    <label for="age" class="block text-yellow-300 font-medium mb-2">Age</label>
                    <input 
                        type="text" 
                        name="age" 
                        id="age" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->age}}" 
                        required>
                </div>

                <!-- Sex -->
                <div>
                    <label for="sex" class="block text-yellow-300 font-medium mb-2">Sex</label>
                    <input 
                        type="text" 
                        name="sex" 
                        id="sex" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->sex}}" 
                        required>
                </div>
                
                <!-- Languages -->
                <div>
                    <label for="languages" class="block text-yellow-300 font-medium mb-2">Languages</label>
                    <input 
                        type="text" 
                        name="languages" 
                        id="languages" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->languages}}" 
                        required>
                </div>

                <!-- Qualification -->
                <div>
                    <label for="qualification" class="block text-yellow-300 font-medium mb-2">Qualification</label>
                    <input 
                        type="text" 
                        name="qualification" 
                        id="qualification" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->qualification}}" 
                        required>
                </div>

                <!-- Courses -->
                <div>
                    <label for="courses" class="block text-yellow-300 font-medium mb-2">Courses</label>
                    <input 
                        type="text" 
                        name="courses" 
                        id="courses" 
                        class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                        value="{{$worker->courses}}" 
                        required>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-3 bg-yellow-500 text-red-900 font-semibold rounded-lg hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-300 mt-6">
                    Update
                </button>
            </div>
        </form>
    </div>

</body>
</html>
