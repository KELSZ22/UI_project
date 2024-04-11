<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form | Crewnnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-red-500">

<!-- Navigation bar -->
<nav class="bg-gray-300 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div >
        <a href="#" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="#" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Contact Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Apply Now</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Login</a></li>

        </ul>
      </div>
      <div class="block md:hidden">
        <button id="menu-toggle" class="text-white focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden">
      <ul class="flex flex-col space-y-4">
          <li><a href="#" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="Contactus" class="text-black hover:text-red-300">Contact Us</a></li>
          <li><a href="applyUs" class="text-black hover:text-red-300">Apply Now</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Login</a></li>
      </ul>
    </div>
</nav>




<!-- Applying section -->
<section id="apply" class="container mx-auto mt-8 px-10">
    <div class="text-center bg-white p-4  rounded-lg shadow-md ">
        <h2 class="text-2xl font-semibold mb-2">Apply to Crewnnect</h2>
        <p class="text-gray-700 text-l">
            Please take a moment to complete the form provided below in order to apply for the 
            exciting job opportunities available with us. Your submission of this form will enable 
            us to better understand your skills, qualifications, and interests, allowing us to match 
            you with the most suitable positions within our organization. We appreciate your interest in 
            joining our team and look forward to reviewing your application.
        </p>
    </div>

    <!-- Application Form -->
    <section class="container mx-auto mt-8 px-4">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-4">Application Form</h2>
            
            <!-- Job Position Picker -->
            <div class="mb-4 ">
                <h3 class="text-lg font-semibold mb-2">Employment Applications</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-3">
                    <div>
                        <label for="job_position" class="block text-gray-700 font-semibold">Position 1st Option</label>
                        <select id="job_position" name="job_position" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <option value="" disabled selected>Select Job Position</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Graphic Designer">Graphic Designer</option>
                            <option value="Marketing Manager">Marketing Manager</option>
                            <option value="Sales Representative">Sales Representative</option>
                            <!-- Add more job positions as needed -->
                        </select>
                        <span id="job_position_error" class="text-red-500 hidden">Please select a job position</span>
                    </div>
                    <div>
                        <label for="job_position" class="block text-gray-700 font-semibold">Position 2nd Option</label>
                        <select id="job_position2" name="job_position2" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <option value="" disabled selected>Select Job Position</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="Graphic Designer">Graphic Designer</option>
                            <option value="Marketing Manager">Marketing Manager</option>
                            <option value="Sales Representative">Sales Representative</option>
                            <!-- Add more job positions as needed -->
                        </select>
                        <span id="job_position2_error" class="text-red-500 hidden">Please select a job position</span>
                        
                    </div>
                </div>

                
                
                
            </div>

            <!-- Personal Data -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Personal Data</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="last_name" class="block text-gray-700 font-semibold">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="last_name_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="first_name" class="block text-gray-700 font-semibold">First Name:</label>
                        <input type="text" id="first_name" name="first_name" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="first_name_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="middle_name" class="block text-gray-700 font-semibold">Middle Name:</label>
                        <input type="text" id="middle_name" name="middle_name" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        <span id="middle_name_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="dob" class="block text-gray-700 font-semibold">Date of Birth:</label>
                        <input type="date" id="dob" name="dob" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="dob_error" class="text-red-500 hidden">Please enter your date of birth</span>
                    </div>
                    <div>
                        <label for="height" class="block text-gray-700 font-semibold">Height (cm):</label>
                        <input type="number" id="height" name="height" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        <span id="height_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="weight" class="block text-gray-700 font-semibold">Weight (kg):</label>
                        <input type="number" id="weight" name="weight" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        <span id="weight_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="age" class="block text-gray-700 font-semibold">Age:</label>
                        <input type="number" id="age" name="age" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        <span id="age_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="civil_status" class="block text-gray-700 font-semibold">Civil Status:</label>
                        <input type="text" id="civil_status" name="civil_status" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        <span id="civil_status_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="citizenship" class="block text-gray-700 font-semibold">Citizenship:</label>
                        <input type="text" id="citizenship" name="citizenship" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        <span id="citizenship_error" class="text-red-500 hidden">Please input</span>
                    </div>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Contact Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                        <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="email_error" class="text-red-500 hidden">Please enter your email address</span>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 font-semibold">Phone:</label>
                        <input type="tel" id="phone" name="phone" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="phone_error" class="text-red-500 hidden">Please enter your phone number</span>
                    </div>
                </div>
            </div>

            <!-- Educational Attainment -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold mb-2">Educational Attainment</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="degree" class="block text-gray-700 font-semibold">Degree:</label>
                        <input type="text" id="degree" name="degree" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="degree_error" class="text-red-500 hidden">Please enter your degree</span>
                    </div>
                    <div>
                        <label for="university" class="block text-gray-700 font-semibold">University:</label>
                        <input type="text" id="university" name="university" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="university_error" class="text-red-500 hidden">Please enter your university</span>
                    </div>
                </div>
            </div>

            

            
        </div>
    </section>

    <section class="container mx-auto mt-8 px-4">
        <div class="bg-white p-4 px-8 rounded-lg shadow-md">
            <!-- Agreement Checkbox -->
            <div class="mb-4">
                <label for="agree" class="inline-flex items-center">
                    <input type="checkbox" id="agree" name="agree" class="form-checkbox h-5 w-5 text-blue-600">
                    <span class="ml-2 text-gray-700">I agree to the terms and conditions</span>
                </label>
            </div>
            <div class="mb-4">
                <label for="agree" class="inline-flex items-center">
                    <input type="checkbox" id="agree" name="agree" class="form-checkbox h-5 w-5 text-blue-600">
                    <span class="ml-2 text-gray-700">I agree to the data privacy conditions.</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div class="mt-4 text-center">
                <button type="submit" onclick="validateForm()" class="bg-red-700 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:border-gray-700">Submit Application</button>
            </div>
            
        </div>
    </section>

    
    

</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 mt-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Crewnect. All rights reserved.</p>
    </div>
</footer>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    function validateForm() {
        const lastName = document.getElementById("last_name").value;
        const firstName = document.getElementById("first_name").value;
        const middleName = document.getElementById("middle_name").value;
        const dob = document.getElementById("dob").value;
        const height = document.getElementById("height").value;
        const weight = document.getElementById("weight").value;
        const age = document.getElementById("age").value;
        const civilStatus = document.getElementById("civil_status").value;
        const citizenship = document.getElementById("citizenship").value;

        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const degree = document.getElementById("degree").value;
        const university = document.getElementById("university").value;
        const jobPosition = document.getElementById("job_position").value;
        const jobPosition2 = document.getElementById("job_position2").value;

        if (lastName === "") {
            document.getElementById("last_name_error").classList.remove("hidden");
        } else {
            document.getElementById("last_name_error").classList.add("hidden");
        }

        if (firstName === "") {
            document.getElementById("first_name_error").classList.remove("hidden");
        } else {
            document.getElementById("first_name_error").classList.add("hidden");
        }

        if (middleName=== "") {
            document.getElementById("middle_name_error").classList.remove("hidden");
        } else {
            document.getElementById("middle_name_error").classList.add("hidden");
        }

        if (dob === "") {
            document.getElementById("dob_error").classList.remove("hidden");
        } else {
            document.getElementById("dob_error").classList.add("hidden");
        }

        if (height === "") {
            document.getElementById("height_error").classList.remove("hidden");
        } else {
            document.getElementById("height_error").classList.add("hidden");
        }
        
        if (weight === "") {
            document.getElementById("weight_error").classList.remove("hidden");
        } else {
            document.getElementById("weight_error").classList.add("hidden");
        }
        
        if (age === "") {
            document.getElementById("age_error").classList.remove("hidden");
        } else {
            document.getElementById("age_error").classList.add("hidden");
        }
        
        if (civilStatus === "") {
            document.getElementById("civil_status_error").classList.remove("hidden");
        } else {
            document.getElementById("civil_status_error").classList.add("hidden");
        }
        
        if (citizenship === "") {
            document.getElementById("citizenship_error").classList.remove("hidden");
        } else {
            document.getElementById("citizenship_error").classList.add("hidden");
        }

        if (email === "") {
            document.getElementById("email_error").classList.remove("hidden");
        } else {
            document.getElementById("email_error").classList.add("hidden");
        }

        if (phone === "") {
            document.getElementById("phone_error").classList.remove("hidden");
        } else {
            document.getElementById("phone_error").classList.add("hidden");
        }

        if (degree === "") {
            document.getElementById("degree_error").classList.remove("hidden");
        } else {
            document.getElementById("degree_error").classList.add("hidden");
        }

        if (university === "") {
            document.getElementById("university_error").classList.remove("hidden");
        } else {
            document.getElementById("university_error").classList.add("hidden");
        }

        if (jobPosition === "") {
            document.getElementById("job_position_error").classList.remove("hidden");
        } else {
            document.getElementById("job_position_error").classList.add("hidden");
        }
        if (jobPosition2 === "") {
            document.getElementById("job_position2_error").classList.remove("hidden");
        } else {
            document.getElementById("job_position2_error").classList.add("hidden");
        }
    }
</script>

</body>
</html>
