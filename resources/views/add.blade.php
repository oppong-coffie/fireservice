<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi-Step Form</title>
    @vite('resources/css/app.css')

    <style>
        .form-section {
            display: hidden;
        }

        .form-section.active {
            display: block;
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-gray-900">
      <!-- Navbar -->
      <nav class="bg-red-600 p-4 flex justify-between items-center mb-5">
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

    <div class="max-w-4xl mx-auto p-8 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-4xl font-semibold text-yellow-500 mb-6">Add New Person</h1>

        <form id="multiStepForm" action="{{ route('sendadd') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Personal Information Section -->
            <div class="form-section active" id="personalInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Personal Information</h2>
                <div class="space-y-4">
                     <!-- Profile Picture Upload -->
        <div class="mb-4">
            <label for="profile_pic" class="block text-sm font-semibold text-gray-700">Profile Picture</label>
            <input 
                type="file" 
                name="profile_pic" 
                id="profile_pic" 
                class="w-full p-4 bg-gray-700 text-white rounded-lg shadow-md" 
                accept="image/*"
                required>
        </div>
                    
                    <div>
                        <label for="firstname" class="text-white">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="surname" class="text-white">Sur Name</label>
                        <input type="text" name="surname" id="surname" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                        <div>
                            <label for="dob" class="text-white">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                        </div>
                        <div>
                            <label for="pob" class="text-white">Place of Birth</label>
                            <input type="text" name="pob" id="pob" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                        </div>
                        <div>
                            <label for="marital" class="text-white">Marital Stutus</label>
                            <select name="marital_status" id="marital" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                                <option value="">--select--</option>
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                                <option value="divorsed">Divorced</option>
                            </select>
                        </div>
                        <div>
                            <label for="namespouse" class="text-white">Name of Spouse</label>
                            <input type="text" name="spouse" id="namespouse" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                        </div>
                        
                        <div>
                            <label for="num_children" class="text-white">Number of Childen</label>
                            <input type="text" name="num_children" id="num_children" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                        </div>
                  <div>
                        <label for="namechildren" class="text-white">Names of Childen</label>
                        <input type="text" name="names_children" id="namechildren" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="age" class="text-white">Age</label>
                        <input type="text" name="age" id="age" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="sex" class="text-white">Sex</label>
                        <select name="sex" id="sex" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                            <option value="">--Select--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="language" class="text-white">Language Spoken</label>
                        <input type="text" name="languages" id="language" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                     <div>
                        <label for="qualification" class="text-white">Accademin Qualification</label>
                        <input type="text" name="qualification" id="qualification" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="courses" class="text-white">Courses</label>
                        <input type="text" name="courses" id="courses" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                     
                    
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="form-section" id="contactInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Contact Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="phone" class="text-white">Phone</label>
                        <input type="text" name="contact" id="phone" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="email" class="text-white">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="hometown" class="text-white">Home Town</label>
                        <input type="hometown" name="hometown" id="hometown" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="residential_address" class="text-white">Residential Address</label>
                        <textarea name="residential_address" id="residential_address" rows="3" class="w-full p-3 rounded-lg bg-gray-700 text-white" required></textarea>
                    </div>
                    <div>
                        <label for="postal_address" class="text-white">Postal Address</label>
                        <input name="residential_address" id="postal_address" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="kin" class="text-white">Next of Kin</label>
                        <input name="kin_name" id="kin" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="kin_phone" class="text-white">Next of Kin's number</label>
                        <input name="kin_phone" id="kin_phone" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="bank_name" class="text-white">Name of Bank</label>
                        <input name="bank_name" id="bank_name" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="account_number" class="text-white">Account Number</label>
                        <input name="bank_number" id="account_number" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="voters_number" class="text-white">Voters Number</label>
                        <input name="voters_id" id="voters_number" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="national_id" class="text-white">Nation ID</label>
                        <input name="national_id" id="national_id" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                </div>
            </div>

            <!-- Job Information Section -->
            <div class="form-section" id="jobInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Job Information</h2>
                <div class="space-y-4">
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
            </div>

            <!-- Health Information Section -->
            <div class="form-section" id="healthInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Health Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="medical_conditions" class="text-white">Medical Challenged</label>
                        <input type="text" name="medical_conditions" id="medical_conditions" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="allergies" class="text-white">Sickle Cell</label>
                        <input type="text" name="allergies" id="allergies" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="blood_type" class="text-white">Blood Type</label>
                        <select name="blood_type" id="blood_type" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
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
            </div>

            <!-- Navigation Buttons -->
            {{-- <div class="form-navigation">
                <button type="button" id="prevBtn" class="px-4 py-2 bg-gray-600 text-white rounded-lg">Previous</button>
                <button type="button" id="nextBtn" class="px-4 py-2 bg-yellow-500 text-white rounded-lg">Next</button>
            </div> --}}

            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-400 mt-6" id="submitBtn">Submit</button>
        </form>
    </div>

                <!-- Footer (Optional) -->
                <div class="text-center text-gray-500 mt-8">
                    <p>&copy; 2024 Fire Service Admin Dashboard. All rights reserved.</p>
                </div>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.form-section');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');

        function showStep(step) {
            steps.forEach((el, index) => {
                el.classList.remove('active');
                if (index === step) {
                    el.classList.add('active');
                }
            });


            // Show or hide the submit button
            if (step === steps.length - 1) {
                submitBtn.classList.remove('hidden');
                nextBtn.classList.add('hidden');
            } else {
                submitBtn.classList.add('hidden');
                nextBtn.classList.remove('hidden');
            }

            // Show or hide the previous button
            if (step === 0) {
                prevBtn.classList.add('hidden');
            } else {
                prevBtn.classList.remove('hidden');
            }
        }

        nextBtn.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // Initialize the form
        showStep(currentStep);
    </script>
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