<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form | Crewnnect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs/qrcode.min.js"></script>
    <style>
        #qrcode-container {
        display: flex;
        justify-content: center;
        }
  </style>
</head>
<body class="bg-blue-400">

<!-- Navigation bar -->
<nav class="bg-gray-300 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div>
        <a href="/homepage" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="/homepage" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Home</a></li>
          <li><a href="aboutUs#" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">About Us</a></li>
          <li><a href="/jobs" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Jobs</a></li>
          <li><a href="/Contactus" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Contact Us
          <img class="h-6 ml-4 mb-1 inline-block" src="images/contact-us.png"> </a></li>
          <li><a href="/applyNow" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Apply Now</a></li>
          <a href="/login"><img class="h-8 inline-block my-1 rounded hover:bg-red-800" src="images/icon.png"></a>
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
            <li><a href="homepage" class="text-black hover:text-red-300">Home</a></li>
            <li><a href="aboutus" class="text-black hover:text-red-300">About Us</a></li>
            <li><a href="jobs" class="text-black hover:text-red-300">Jobs</a></li>
            <li><a href="Contactus" class="text-black hover:text-red-300">Contact Us</a></li>
            <li><a href="applyNow" class="text-black hover:text-red-300">Apply Now</a></li>
            <li><a href="login" class="text-black hover:text-red-300">Login</a></li>
        </ul>
    </div>
</nav>

<!-- Applying section -->
<section id="apply" class="container mx-auto mt-8 px-10">
    <div class="text-center bg-white p-4  rounded-lg shadow-md flex">
        <div class="w-5/6 pr-4">
            <h2 class="text-2xl font-semibold mb-2">Apply to Crewnnect</h2>
            <div class="flex">
                <p class=" text-gray-700 text-l">
                    Please take a moment to complete the form provided below in order to apply for the 
                    exciting job opportunities available with us. Your submission of this form will enable 
                    us to better understand your skills, qualifications, and interests, allowing us to match 
                    you with the most suitable positions within our organization. We appreciate your interest in 
                    joining our team and look forward to reviewing your application.
                </p>
            </div>
        </div>
        <!-- QR Code -->
        <div id="qrcode-container" class=" w-1/6">
            <div id="qrcode"></div>
        </div>
    </div>
    
    <!-- Application Form -->
    <section class="container mx-auto mt-8 px-4 ">       
        <div class="bg-white p-4 rounded-lg shadow-md">
           
            <div id="notification" class="p-4 rounded-lg shadow-md bg-green-500 text-white text-center py-2 hidden">
                Your registration has been successfully submitted!
            </div>

            <h2 class="text-2xl font-semibold text-center mb-4">Application Form</h2>
            <!-- Job Position Picker -->
            <div class="mb-12 ">
                <h3 class="text-lg font-semibold mb-2">Employment Applications</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-3">
                    <div>
                        <label for="job_position" class="block text-gray-700 font-semibold">*Position 1st Option</label>
                        <select type="text" id="job_position" name="job_position" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <option value="" disabled selected>Select Job Position</option>
                            <option value="Construction">Construction</option>
                            <option value="Education">Education</option>
                            <option value="Hospitality">Hospitality</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Medical and Healthcare">Medical and Healthcare</option>
                            <option value="Personal Beauty and Wellness">Personal Beauty and Wellness</option>
                            <option value="Retail">Retail</option>
                            <!-- Add more job positions as needed -->
                        </select>
                        <span id="job_position_error" class="text-red-500 hidden">Please select a job position</span>
                    </div>
                    <div>
                        <label for="job_position2" class="block text-gray-700 font-semibold">Position 2nd Option</label>
                        <select type="text" id="job_position2" name="job_position2" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <option value="" disabled selected>Select Job Position</option>
                            <option value="Construction">Construction</option>
                            <option value="Education">Education</option>
                            <option value="Hospitality">Hospitality</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Medical and Healthcare">Medical and Healthcare</option>
                            <option value="Personal Beauty and Wellness">Personal Beauty and Wellness</option>
                            <option value="Retail">Retail</option>
                        </select>
                        <span id="job_position2_error" class="text-red-500 hidden">Please select a job position</span>
                    </div>
                </div>             
            </div>

            <!-- Personal Data -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2">Personal Data</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="last_name" class="block text-gray-700 font-semibold">*Last Name:</label>
                        <input type="text" id="last_name" name="last_name" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="last_name_error" class="text-red-500 hidden">Please input Last Name</span>
                    </div>
                    <div>
                        <label for="first_name" class="block text-gray-700 font-semibold">*First Name:</label>
                        <input type="text" id="first_name" name="first_name" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="first_name_error" class="text-red-500 hidden">Please input First Name</span>
                    </div>
                    <div>
                        <label for="middle_name" class="block text-gray-700 font-semibold">Middle Name:</label>
                        <input type="text" id="middle_name" name="middle_name" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        <span id="middle_name_error" class="text-red-500 hidden">Please input</span>
                    </div>
                    <div>
                        <label for="dob" class="block text-gray-700 font-semibold">*Date of Birth:</label>
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
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2 ">Contact Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold">*Email:</label>
                        <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="email_error" class="text-red-500 hidden">Please enter your email address</span>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 font-semibold">*Phone:</label>
                        <input type="tel" id="phone" name="phone" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="phone_error" class="text-red-500 hidden">Please enter your phone number</span>
                    </div>
                </div>
            </div>

            <!-- Spouse Information -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2">Spouse Information</h3>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="spouse_Name" class="block text-gray-700 font-semibold">Full Name:</label>
                            <input type="text" id="spouse_Name" name="spouse_Name" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="spouse_Occupation" class="block text-gray-700 font-semibold">Occupation:</label>
                            <input type="text" id="spouse_Occupation" name="spouse_Occupation" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label for="spouse_Children" class="block text-gray-700 font-semibold">No of Children:</label>
                            <input type="number" id="spouse_Children" name="spouse_Children" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        </div>
                        <div>
                            <label for="spouse_Mobile" class="block text-gray-700 font-semibold">Mobile:</label>
                            <input type="number" id="spouse_Mobile" name="spouse_Mobile" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        </div>
                        <div>
                            <label for="spouse_Landline" class="block text-gray-700 font-semibold">Landline:</label>
                            <input type="number" id="spouse_Landline" name="spouse_Landline" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Address  -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2">Address</h3>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="houseNStreet" class="block text-gray-700 font-semibold">House & Street:</label>
                            <input type="houseNStreet" id="houseNStreet" name="houseNStreet" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="Barangay" class="block text-gray-700 font-semibold">Barangay:</label>
                            <input type="text" id="Barangay" name="Barangay" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <span id="Barangay_error" class="text-red-500 hidden">Please input</span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label for="city" class="block text-gray-700 font-semibold">City or Municipality:</label>
                            <input type="text" id="city" name="city" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <span id="city_error" class="text-red-500 hidden">Please input</span>
                        </div>
                        <div>
                            <label for="province" class="block text-gray-700 font-semibold">Province and Region:</label>
                            <input type="text" id="province" name="province" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <span id="province_error" class="text-red-500 hidden">Please input</span>
                        </div>
                        <div>
                            <label for="zip" class="block text-gray-700 font-semibold">Zipcode:</label>
                            <input type="text" id="zip" name="zip" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <span id="zip_error" class="text-red-500 hidden">Please input</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Parents Information -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2">Parents Information</h3>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="CNFather" class="block text-gray-700 font-semibold">Complete Name of Father:</label>
                            <input type="text" id="CNFather" name="CNFather" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="CNFOccupation" class="block text-gray-700 font-semibold">Occupation:</label>
                            <input type="text" id="CNFOccupation" name="CNFOccupation" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="CNMother" class="block text-gray-700 font-semibold">Complete Name of Mother:</label>
                            <input type="text" id="CNFather" name="CNFather" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="CNMOccupation" class="block text-gray-700 font-semibold">Occupation:</label>
                            <input type="text" id="CNFOccupation" name="CNFOccupation" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <div>
                        <label for="addressParents" class="block text-gray-700 font-semibold">Complete Address:</label>
                        <input type="text" id="addressParents" name="addressParents" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                    </div>
                </div>
            </div>

            <!-- Emergency Contact -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2">Emergency Contact</h3>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="emergencyName" class="block text-gray-700 font-semibold">Full Name:</label>
                            <input type="text" id="emergencyName" name="emergencyName" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="emergencyRelation" class="block text-gray-700 font-semibold">Relation:</label>
                            <input type="text" id="emergencyRelation" name="emergencyRelation" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <div>
                        <label for="addressEmergency" class="block text-gray-700 font-semibold">Complete Address:</label>
                        <input type="text" id="addressEmergency" name="addressEmergency" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="emergencyMobile" class="block text-gray-700 font-semibold">Mobile:</label>
                            <input type="text" id="emergencyMobile" name="emergencyMobile" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="emergencyLandline" class="block text-gray-700 font-semibold">Landline:</label>
                            <input type="text" id="emergencyLandline" name="emergencyLandline" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="emergencyEmail" class="block text-gray-700 font-semibold">Email:</label>
                            <input type="text" id="emergencyEmail" name="emergencyEmail" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Educational Attainment -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2">Educational Attainment</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="ES" class="block text-gray-700 font-semibold">Elemntary School:</label>
                        <input type="text" id="ES" name="ES" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        
                    </div>
                    <div>
                        <label for="ESGraduate" class="block text-gray-700 font-semibold">Graduated:</label>
                        <input type="number" id="ESGraduate" name="ESGraduate" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        
                    </div>
                    <div>
                        <label for="HSGraduate" class="block text-gray-700 font-semibold">High School:</label>
                        <input type="text" id="HS" name="HS" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        
                    </div>
                    <div>
                        <label for="HSGraduate" class="block text-gray-700 font-semibold">Graduated:</label>
                        <input type="number" id="HSGraduate" name="HSGraduate" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        
                    </div>
                    <div>
                        <label for="Collage" class="block text-gray-700 font-semibold">College:</label>
                        <input type="text" id="Collage" name="Collage" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        
                    </div>
                    <div>
                        <label for="CollageGraduate" class="block text-gray-700 font-semibold">Graduated:</label>
                        <input type="number" id="CollageGraduate" name="CollageGraduate" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700">
                        
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="degreeReceived" class="block text-gray-700 font-semibold">Degree Received:</label>
                        <input type="text" id="degreeReceived" name="degreeReceived" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        
                    </div>
                </div>
                <div class="grid grid-cols-1  gap-4">
                    <div>
                        <label for="specialSkills" class="block text-gray-700 font-semibold">Special Skills:</label>
                        <input type="text" id="specialSkills" name="specialSkills" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        
                    </div>
                </div>
            </div>


            <!-- Previous Employment Record -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2 ">Previous Employment Record</h3>
                <div class="mb-12">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label for="oneCompanyName" class="block text-gray-700 font-semibold">1 Company Name:</label>
                            <input type="text" id="oneCompanyName" name="oneCompanyName" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>                     
                        </div>
                        <div>
                            <label for="oneTenureStart" class="block text-gray-700 font-semibold">Tenure Start:</label>
                            <input type="date" id="oneTenureStart" name="oneTenureStart" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                            
                        </div>
                        <div>
                            <label for="oneTenureEnd" class="block text-gray-700 font-semibold">Tenure End:</label>
                            <input type="date" id="oneTenureEnd" name="oneTenureEnd" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="onePosition" class="block text-gray-700 font-semibold">Position:</label>
                            <input type="text" id="onePosition" name="onePosition" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            
                        </div>
                        <div>
                            <label for="oneLocCountry" class="block text-gray-700 font-semibold">Location Country:</label>
                            <input type="text" id="oneLocCountry" name="oneLocCountry" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="twoCompany" class="block text-gray-700 font-semibold">2 Company Name:</label>
                        <input type="text" id="twoCompany" name="twoCompany" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                    </div>
                    <div>
                        <label for="twoTenurestart" class="block text-gray-700 font-semibold">Tenure Start:</label>
                        <input type="date" id="twoTenurestart" name="twoTenurestart" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                    </div>
                    <div>
                        <label for="twoTenureEnd" class="block text-gray-700 font-semibold">Tenure End:</label>
                        <input type="date" id="twoTenureEnd" name="twoTenureEnd" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="twoPosition" class="block text-gray-700 font-semibold">Position:</label>
                        <input type="text" id="twoPosition" name="twoPosition" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                    </div>
                    <div>
                        <label for="twoLocCountry" class="block text-gray-700 font-semibold">Location Country:</label>
                        <input type="text" id="twoLocCountry" name="twoLocCountry" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                    </div>
                </div>
            </div>

            <!-- Character Reference -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2 ">Character Reference</h3>
                <div class="mb-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="oneChacRef" class="block text-gray-700 font-semibold">1 Complete Name:</label>
                            <input type="text" id="oneChacRef" name="oneChacRef" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="oneRelation" class="block text-gray-700 font-semibold">Relation:</label>
                            <input type="text" id="oneRelation" name="oneRelation" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="oneChacCom" class="block text-gray-700 font-semibold">Company:</label>
                            <input type="text" id="oneChacCom" name="oneChacCom" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="onePosChac" class="block text-gray-700 font-semibold">Position:</label>
                            <input type="text" id="onePosChac" name="onePosChac" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="oneChacContact" class="block text-gray-700 font-semibold">Contact No:</label>
                            <input type="tel" id="oneChacContact" name="oneChacContact" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                </div>
                <div class="mb-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                        <div>
                            <label for="twoChacRef" class="block text-gray-700 font-semibold">2 Complete Name:</label>
                            <input type="email" id="twoChacRef" name="twoChacRef" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 font-semibold">Relation:</label>
                            <input type="tel" id="phone" name="phone" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="Company2" class="block text-gray-700 font-semibold">Company:</label>
                            <input type="Company2" id="Company2" name="Company2" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="Position2" class="block text-gray-700 font-semibold">Position:</label>
                            <input type="Position2" id="Position2" name="Position" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                        <div>
                            <label for="ContactNo2" class="block text-gray-700 font-semibold">Contact No:</label>
                            <input type="ContactNo2" id="ContactNo2" name="ContactNo2" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Passport Details -->
            <div class="mb-12">
                <h3 class="text-lg font-semibold mb-2">Passport Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4">
                    <div>
                        <label for="passportSignature" class="block text-gray-700 font-semibold">Signature:</label>
                        <input type="passportSignature" id="passportSignature" name="passportSignature" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="passportSignature_error" class="text-red-500 hidden">Please input</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 px-4">
                    <div>
                        <label for="passportDoI" class="block text-gray-700 font-semibold">Date Of Issue:</label>
                        <input type="date" id="passportDoI" name="passportDoI" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="passportDoI_error" class="text-red-500 hidden">Please input</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 px-4">
                    <div>
                        <label for="passportDoE" class="block text-gray-700 font-semibold">Date Of Expiration:</label>
                        <input type="date" id="passportDoE" name="passportDoE" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="passportDoE_error" class="text-red-500 hidden">Please input</span>
                    </div>
                </div>   
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 px-4">
                    <div>
                        <label for="passportIA" class="block text-gray-700 font-semibold">Issuing Authority:</label>
                        <input type="passportIA" id="passportIA" name="passportIA" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                        <span id="passportIA_error" class="text-red-500 hidden">Please input</span>
                    </div>
                </div>
            </div>

            <!-- Acknowledgement -->
            <div class="mb-12">
                    <h3 class="text-lg font-semibold mb-2">Acknowledgement</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 px-4">
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold">Signature:</label>
                            <input type="email" id="email" name="email" class="w-full mt-1 px-4 py-2 border-b-2 border-gray-300 rounded-md focus:outline-none focus:border-gray-700" required>
                            <span id="email_error" class="text-red-500 hidden">Please enter your signature</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 px-4">
                        <div>
                            <label for="dob" class="block text-gray-700 font-semibold">Date:</label>
                            <input type="date" id="dob" name="dob" class="w-full mt-1 px-4 py-2 border-gray-300 border-b-2 rounded-md focus:outline-none focus:border-gray-700" required>
                        </div>
                    </div>      
            </div>
            

        </div>
    </section>
    
    <!-- Agreement Checkbox -->
    <section class="container mx-auto mt-8 px-4">
        <div class="bg-white p-4 px-8 rounded-lg shadow-md">
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="agree1">
                    <span class="ml-2 text-gray-700">I agree to the terms and conditions, which can be read <a href="#" class="text-blue-600 hover:text-blue-300">here</a></span>
                </label>
                <label class="flex items-center mt-2">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" id="agree2">
                    <span class="ml-2 text-gray-700">I agree with your data privacy conditions.</span>
                </label>
            </div>
            <div class="mt-4 text-center">
                <button id="submitBtn" onclick="validateForm()" class="text-center bg-red-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hidden" type="button">Submit Application</button>
            </div>  
        </div>
    </section>
</section>

<!-- Footer -->
<footer class="px-2 sm:px-4 py-4 bg-gray-800 dark:bg-gray-600 items-center md:p-6 text-center flex flex-col relative">
    <span class="text-sm text-white dark:text-red-200 sm:text-center">
       © 2024 Crewnnect. All rights reserved.
    </span>
    <span class="absolute bottom-1 text-xs text-white dark:text-red-400">Powered by: <a href="https://www.negosyante-it.solutions">www.negosyante-it.solutions</a></span>
</footer>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    function validateForm(){
        const lastName = document.getElementById("last_name").value;
        const firstName = document.getElementById("first_name").value;
        const dob = document.getElementById("dob").value;
        const email = document.getElementById("email").value;
        const phone = document.getElementById("phone").value;
        const jobPosition = document.getElementById("job_position").value;

        let hasError = false;

        if (jobPosition === "") {
            document.getElementById("job_position_error").classList.remove("hidden");
            hasError = true;
        } else {
            document.getElementById("job_position_error").classList.add("hidden");
            
        }

        if (lastName === "") {
            document.getElementById("last_name_error").classList.remove("hidden");
            hasError = true;
        } else {
            document.getElementById("last_name_error").classList.add("hidden");
            
        }
        if (firstName === "") {
            document.getElementById("first_name_error").classList.remove("hidden");
            hasError = true;
        } else {
            document.getElementById("first_name_error").classList.add("hidden");
        }
        if (dob === "") {
            document.getElementById("dob_error").classList.remove("hidden");
            hasError = true;
        } else {
            document.getElementById("dob_error").classList.add("hidden");
        }
        if (email === "") {
            document.getElementById("email_error").classList.remove("hidden");
            hasError = true;
        } else {
            document.getElementById("email_error").classList.add("hidden");
        }
        if (phone === "") {
            document.getElementById("phone_error").classList.remove("hidden");
            hasError = true;
        } else {
            document.getElementById("phone_error").classList.add("hidden");
        }

        if (hasError) {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            // If no errors, show the notification and hide the form
            document.getElementById("notification").classList.remove("hidden");
            

            // Optionally, hide the notification after a certain time
            setTimeout(function() {
                document.getElementById("notification").classList.add("hidden");
            }, 7000); 
        }
    }

    function checkAgreement() {
      const agree1 = document.getElementById('agree1').checked;
      const agree2 = document.getElementById('agree2').checked;
      const submitBtn = document.getElementById('submitBtn');
      if (agree1 && agree2) {
        submitBtn.classList.remove('hidden');
      } else {
        submitBtn.classList.add('hidden');
      }
    }
    document.getElementById('agree1').addEventListener('change', checkAgreement);
    document.getElementById('agree2').addEventListener('change', checkAgreement);

    var qr = new QRCode(document.getElementById("qrcode"), {
      text: window.location.href,
      width: 110,
      height: 110,
      colorDark : "#000000",
      colorLight : "#ffffff",
      correctLevel : QRCode.CorrectLevel.H
      
    });
</script>

</body>
</html>
