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
            Edit Contact Info for {{$worker->surname}} {{$worker->firstname}}
        </h1>

        <form action="{{route('sendeditcontact')}}" method="POST">
            @csrf
            <!-- id -->
            <div class="hidden">
                <label for="id" class="block text-yellow-300 font-medium mb-2">ID</label>
                <input 
                    type="text" 
                    name="id" 
                    id="id" 
                    class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-yellow-400" 
                    value="{{$worker->id}}" 
                    readonly>
            </div>

            <div class="form-section" id="contactInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Contact Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="phone" class="text-white">Phone</label>
                        <input 
                            type="text" 
                            name="phone" 
                            id="phone" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->phone}}" 
                            required>
                    </div>
                    <div>
                        <label for="email" class="text-white">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->email}}" 
                            required>
                    </div>
                    <div>
                        <label for="hometown" class="text-white">Home Town</label>
                        <input 
                            type="text" 
                            name="hometown" 
                            id="hometown" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->hometown}}" 
                            required>
                    </div>
                    <div>
                        <label for="residential_address" class="text-white">Residential Address</label>
                        <textarea 
                            name="residential_address" 
                            id="residential_address" 
                            rows="3" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            required>{{$worker->residential_address}}</textarea>
                    </div>
                    <div>
                        <label for="postal_address" class="text-white">Postal Address</label>
                        <textarea 
                            name="postal_address" 
                            id="postal_address" 
                            rows="3" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            required>{{$worker->postal_address}}</textarea>
                    </div>
                    <div>
                        <label for="kin_name" class="text-white">Next of Kin</label>
                        <input 
                            name="kin_name" 
                            id="kin_name" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->kin_name}}" 
                            required>
                    </div>
                    <div>
                        <label for="kin_phone" class="text-white">Next of Kin's Number</label>
                        <input 
                            name="kin_phone" 
                            id="kin_phone" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->kin_phone}}" 
                            required>
                    </div>
                    <div>
                        <label for="bank_name" class="text-white">Name of Bank</label>
                        <input 
                            name="bank_name" 
                            id="bank_name" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->bank_name}}" 
                            required>
                    </div>
                    <div>
                        <label for="account_number" class="text-white">Account Number</label>
                        <input 
                            name="bank_number" 
                            id="account_number" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->bank_number}}" 
                            required>
                    </div>
                    <div>
                        <label for="voters_number" class="text-white">Voters Number</label>
                        <input 
                            name="voters_id" 
                            id="voters_number" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->voters_id}}" 
                            required>
                    </div>
                    <div>
                        <label for="national_id" class="text-white">National ID</label>
                        <input 
                            name="national_id" 
                            id="national_id" 
                            class="w-full p-3 rounded-lg bg-gray-700 text-white" 
                            value="{{$worker->national_id}}" 
                            required>
                    </div>
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
