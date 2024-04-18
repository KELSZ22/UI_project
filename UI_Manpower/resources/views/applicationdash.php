<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION DASHBOARD | CREWNNECT</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<nav class="bg-gray-300 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div>
        <a href="/homepage" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="/homepage" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Home</a></li>
          <li><a href="/aboutUs" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">About Us</a></li>
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
          <li><a href="/homepage" class="text-black hover:text-red-800">Home</a></li>
          <li><a href="/aboutus" class="text-black hover:text-red-800">About Us</a></li>
          <li><a href="/jobs" class="text-black hover:text-red-800">Jobs</a></li>
          <li><a href="/Contactus" class="text-black hover:text-red-800">Contact Us</a></li>
          <li><a href="/applyNow" class="text-black hover:text-red-800">Apply Now</a></li>
          <li><a href="/login" class="text-black hover:text-red-800">Login</a></li>
      </ul>
    </div>
  </nav>

    <div class="flex flex-col md:flex-row h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-gray-100 flex-none md:w-64 md:flex-shrink-0">
            <div class="p-4">
                <h1 class="text-xl font-bold mb-4">Applicant Dashboard</h1>
                <!-- Sidebar Links -->
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block hover:bg-gray-700 py-2 px-4 rounded">Personal Information</a>
                    </li>
                    <li>
                        <a href="#" class="block hover:bg-gray-700 py-2 px-4 rounded">Documents</a>
                    </li>
                    <li>
                        <a href="#" class="block hover:bg-gray-700 py-2 px-4 rounded">Status</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Requirements Section -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h2 class="text-lg font-semibold mb-4">Requirements</h2>
                <!-- Requirements List -->
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="mr-2">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                        </span>
                        <span>National Identification Card</span>
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">
                            <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600">
                        </span>
                        <span>1x1 ID Picture</span>
                    </li>
                    <!-- Add more requirements as needed -->
                </ul>
                <!-- Progress Bar -->
                <div class="mt-4">
                    <h3 class="text-sm font-semibold mb-2">Progress</h3>
                    <div class="w-full bg-gray-200 rounded-full">
                        <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white rounded-full" style="width: 40%">40%</div>
                    </div>
                </div>
            </div>

            <!-- Document Submission Section -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Submit Documents</h2>
                <form>
                    <div class="mb-4">
                        <label for="national_id" class="block text-sm font-medium text-gray-700">National Identification Card</label>
                        <input type="file" id="national_id" name="national_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="id_picture" class="block text-sm font-medium text-gray-700">1x1 ID Picture</label>
                        <input type="file" id="id_picture" name="id_picture" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <!-- Add more file inputs for other documents -->
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
