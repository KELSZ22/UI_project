<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Account Registration</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="bg-gray-100">

    <nav class="bg-gray-300 p-4">
        <div class="container mx-auto flex justify-between items-center">
        <div >
            <a href="#" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-4">
                <li><a href="homepage" class="text-black hover:text-red-300">Home</a></li>
                <li><a href="aboutus" class="text-black hover:text-red-300">About Us</a></li>
                <li><a href="jobs" class="text-black hover:text-red-300">Jobs</a></li>
                <li><a href="Contactus" class="text-black hover:text-red-300">Contact Us</a></li>
                <li><a href="applyNow" class="text-black hover:text-red-300">Apply Now</a></li>
                <li><a href="login" class="text-black hover:text-red-300">Login</a></li>

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
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Client Account Registration</h1>
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="px-6 py-4">
                <form id="registrationForm" action="#" method="POST" onsubmit="return validateForm()">
                    <div id="notification" class="p-4 rounded-lg shadow-md bg-green-500 text-white text-center py-2 hidden">
                        Your registration has been successfully submitted!
                    </div>
                    <div class="mb-4">
                        <label for="company_name" class="block text-gray-700 text-sm font-bold mb-2">Company Name (Optional):</label>
                        <input type="text" id="company_name" name="company_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-6">
                        <label for="confirm_password"
                            class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <p id="passwordError" class="text-red-500 text-xs italic hidden">Passwords do not match.</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-700 text-sm font-bold mb-2">Field of works they need:</p>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist1" name="checklist1" class="mt-1 mr-2">
                            <label for="checklist1" class="text-gray-700">Construction</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist2" name="checklist2" class="mt-1 mr-2">
                            <label for="checklist2" class="text-gray-700">Education</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist3" name="checklist3" class="mt-1 mr-2">
                            <label for="checklist3" class="text-gray-700">Hospitality</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist4" name="checklist4" class="mt-1 mr-2">
                            <label for="checklist4" class="text-gray-700">Information Technology</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist5" name="checklist5" class="mt-1 mr-2">
                            <label for="checklist5" class="text-gray-700">Manufacturing</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist6" name="checklist6" class="mt-1 mr-2">
                            <label for="checklist6" class="text-gray-700">Medical and Healthcare</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist7" name="checklist7" class="mt-1 mr-2">
                            <label for="checklist7" class="text-gray-700">Personal Beauty and Wellness</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist8" name="checklist8" class="mt-1 mr-2">
                            <label for="checklist8" class="text-gray-700">Manufacturing</label>
                        </div>
                        
                        <!-- Checkbox options -->
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            if (password !== confirm_password) {
                document.getElementById("passwordError").classList.remove("hidden");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
