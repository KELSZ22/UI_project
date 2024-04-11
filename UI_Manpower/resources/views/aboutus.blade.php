<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .bg-image {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            object-fit: cover;
            opacity: 0.6; /* Adjust opacity as needed */
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col">
    <!-- Background Image -->
    <img src="{{url('images/Aboutusbg.jpg')}}" alt="Background Image" class="bg-image">

    <!-- Navigation Bar -->
    <nav class="bg-gray-300 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden">
            <ul class="flex flex-col space-y-4">
                <li><a href="#" class="text-black hover:text-red-300">Home</a></li>
                <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
                <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
                <li><a href="#" class="text-black hover:text-red-300">Contact Us</a></li>
                <li><a href="#" class="text-black hover:text-red-300">Apply Now</a></li>
                <li><a href="#" class="text-black hover:text-red-300">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow">
        <div class="container mx-auto py-8 flex flex-wrap items-center">
            <!-- Left Side Image -->
            <div class="w-full md:w-1/4 p-4">
                <img src="left-image.jpg" alt="Left Image" class="w-full rounded-lg shadow-lg">
            </div>

            <!-- Center Content -->
            <div class="w-full md:w-1/2 p-4">
                <h1 class="text-4xl font-bold text-center mb-4 text-gray-900">Welcome to Crewnnect!</h1>
                <div class="max-w-lg mx-auto">
                    <p class="text-lg text-gray-800 leading-relaxed mb-4">
                            We, "Crewnnect" is a revolutionary platform designed to revolutionize the job search process. Our mission is to seamlessly connect job seekers with employers, creating opportunities for meaningful employment and fostering professional growth. With our user-friendly interface and innovative features, we empower individuals to take control of their careers and find the perfect job match.
                    </p>
                
                </div>

                <!-- What We Do Section -->
                <div class="bg-gray-200 rounded-lg p-4 mt-8">
                    <h2 class="text-2xl font-bold mb-2">What We Do</h2>
                    <p>Still editing picture for chart</p>
                    <!--<p class="text-gray-800 leading-relaxed">
                        At Crewnnect, we provide a comprehensive platform for both job seekers and employers. Our services include:
                    </p>
                    <ul class="list-disc ml-4 mt-2">
                        <li>Job Search and Matching</li>
                        <li>Resume Building and Optimization</li>
                        <li>Employer Recruitment Services</li>
                        <li>Career Counseling and Guidance</li>
                    </ul>
                </div> -->

                <!-- Process Section -->
                <div class="bg-gray-200 rounded-lg p-4 mt-8">
                    <h2 class="text-2xl font-bold mb-2">Our Process</h2>
                    <p>Still editing picture for chart</p>
                    <!--<p class="text-gray-800 leading-relaxed">
                        Our process is simple and effective:
                    </p>
                    <ol class="list-decimal ml-4 mt-2">
                        <li>Sign up for an account</li>
                        <li>Create or upload your resume</li>
                        <li>Search for jobs or post job listings</li>
                        <li>Connect with employers or job seekers</li>
                        <li>Apply for jobs or review applicants</li>
                    </ol>-->
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="w-full md:w-1/4 p-4">
                <img src="right-image.jpg" alt="Right Image" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <div class="flex justify-center items-center">
                <img src="logo1.png" alt="Logo 1" class="w-8 h-8 mr-4">
                <img src="logo2.png" alt="Logo 2" class="w-8 h-8 mr-4">
                <img src="logo3.png" alt="Logo 3" class="w-8 h-8 mr-4">
            </div>
            <p>&copy; 2024 Crewnnect. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
