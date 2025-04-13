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
            display: none;
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

        <!-- Station Time (Dynamic) -->
        <div class="text-white text-lg" id="station-time"></div>
    </nav>

    <div class="max-w-4xl mx-auto p-8 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-4xl font-semibold text-yellow-500 mb-6">Add New Person</h1>

        <form id="multiStepForm" action="{{ route('sendadd') }}" method="POST">
            @csrf

            <!-- Personal Information Section -->
            <div class="form-section active" id="personalInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Personal Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="full_name" class="text-white">Full Name</label>
                        <input type="text" name="full_name" id="full_name" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="dob" class="text-white">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="gender" class="text-white">Gender</label>
                        <select name="gender" id="gender" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="form-section" id="contactInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Contact Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="phone" class="text-white">Phone</label>
                        <input type="tel" name="phone" id="phone" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="email" class="text-white">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="address" class="text-white">Address</label>
                        <textarea name="address" id="address" rows="3" class="w-full p-3 rounded-lg bg-gray-700 text-white" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Job Information Section -->
            <div class="form-section" id="jobInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Job Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="job_title" class="text-white">Job Title</label>
                        <input type="text" name="job_title" id="job_title" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="company" class="text-white">Company</label>
                        <input type="text" name="company" id="company" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label for="experience_years" class="text-white">Years of Experience</label>
                        <input type="number" name="experience_years" id="experience_years" class="w-full p-3 rounded-lg bg-gray-700 text-white" required>
                    </div>
                </div>
            </div>

            <!-- Health Information Section -->
            <div class="form-section" id="healthInfo">
                <h2 class="text-2xl font-semibold text-yellow-500 mb-4">Health Information</h2>
                <div class="space-y-4">
                    <div>
                        <label for="medical_conditions" class="text-white">Medical Conditions</label>
                        <input type="text" name="medical_conditions" id="medical_conditions" class="w-full p-3 rounded-lg bg-gray-700 text-white">
                    </div>
                    <div>
                        <label for="allergies" class="text-white">Allergies</label>
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
            </div>

            <!-- Navigation Buttons -->
            <div class="form-navigation">
                <button type="button" id="prevBtn" class="px-4 py-2 bg-gray-600 text-white rounded-lg">Previous</button>
                <button type="button" id="nextBtn" class="px-4 py-2 bg-yellow-500 text-white rounded-lg">Next</button>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-400 mt-6 hidden" id="submitBtn">Submit</button>
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
