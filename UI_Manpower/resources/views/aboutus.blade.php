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
   <img src="{{url('images/draft background.jpg')}}" alt="Background Image" class="bg-image">

    <!-- Navigation Bar -->
    <nav class="bg-gray-300 p-4">
        <div class="container mx-auto flex justify-between items-center">

            <div>
                <a href="#" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
            </div>

            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="/homepage" class="text-black hover:text-red-300">Home</a></li>
                    <li><a href="/aboutus" class="text-black hover:text-red-300">About Us</a></li>
                    <li><a href="/jobs" class="text-black hover:text-red-300">Jobs</a></li>
                    <li><a href="/Contactus" class="text-black hover:text-red-300">Contact Us</a></li>
                    <a href="/Contactus"><img class="h-6"
                            src="images/contact-us.png">
                    <li><a href="/applyNow" class="text-black hover:text-red-300">Apply Now</a></li>
                    <li><a href="/login" class="text-black hover:text-red-300">Login</a></li>
                    <a href="/login"><img class="h-8"
                            src="images/icon.png"></a>
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
          <li><a href="#" class="text-black hover:text-red-800">About Us</a></li>
          <li><a href="/jobs" class="text-black hover:text-red-800">Jobs</a></li>
          <li><a href="/Contactus" class="text-black hover:text-red-800">Contact Us</a></li>
          <li><a href="/applyNow" class="text-black hover:text-red-800">Apply Now</a></li>
          <li><a href="/login" class="text-black hover:text-red-800">Login</a></li>
      </ul>
    </div>
  </nav>



  <!-- Main Content -->
    <div class="flex-grow ">
        <div class="container mx-auto py-8 flex flex-wrap items-center justify-center">

            <!-- Left Side (Mission) 
            <div class="bg-gray-200 rounded-lg w-full md:w-1/4 p-4">
                <h2 class="text-2xl font-bold mb-2">Our Mission</h2>
                <p class="text-gray-800 leading-relaxed">
                   Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text 
                </p>
            </div>
            -->

            <!-- Center Content -->
            <div class="w-full p-4 border-2 ">
                <!--<h1 class="text-4xl font-bold text-center mb-4 text-gray-900">Welcome to Crewnnect!</h1>-->
                <div class="w-auto mx-auto">
                    <!--<p class="text-lg text-gray-800 leading-relaxed mb-4">
                        We, "Crewnnect" is a revolutionary platform designed to revolutionize the job search process. Our mission is to seamlessly connect job seekers with employers, creating opportunities for meaningful employment and fostering professional growth. With our user-friendly interface and innovative features, we empower individuals to take control of their careers and find the perfect job match.
                    </p>-->
                    <img src="{{url('images/aboutuswelcome.jpg')}}">
                </div>

                <style> 
                    .carousel-container {
                            position: absolute;
                            z-index: 10;
                        }
                    .carousel {
                        overflow: hidden;
                        max-width: 100%; /* Set your desired width */
                        margin: 0 auto;
                        flex:1;
                    }
                    .carousel-inner {
                        display: flex;
                        transition: transform 0.5s ease;
                    }
                    .carousel-item {
                        flex: 0 0 100%;
                        max-width: 100%;
                        width: 100%;
                        height: 180px;
                    }
                </style>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const carousel = document.querySelector('.carousel');
                        const inner = document.querySelector('.carousel-inner');
                        const items = document.querySelectorAll('.carousel-item');
            
                        let currentIndex = 0;
                        const totalItems = items.length;
                        const itemWidth = items[0].clientWidth;
            
                        function moveToIndex(index) {
                            if (index < 0 || index >= totalItems) {
                                currentIndex = index < 0 ? totalItems - 1 : 0;
                            } else {
                                currentIndex = index;
                            }
            
                            const offset = -currentIndex * itemWidth;
                            inner.style.transform = `translateX(${offset}px)`;
                        }
            
                        function next() {
                            moveToIndex(currentIndex + 1);
                        }
            
                        function prev() {
                            moveToIndex(currentIndex - 1);
                        }
            
                        setInterval(next, 3000); // Auto play, change slide every 3 seconds
                    });
                </script>

                <div class="carousel relative shadow-md w-1/2 bg-white border-2 bg-cover md:bg-contain shadow-2xl" style="background-image: url('{{url('images/carouselbg.jpg')}}'); background-size: cover;">
                    <div class="carousel-inner h-80   flex flex-col md:flex-row">
                        <div class="carousel-item md:w-1/2 text-center">
                            <h2 class="text-5xl text-white shadow-lg font-bold shadow mb-2">Our Mission</h2>
                            <p class="text-2xl text-white leading-relaxed">
                                Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text 
                            </p>
                        </div>

                        <div class="carousel-item md:w-1/2 text-center">
                            <h2 class="text-5xl text-white shadow-lg font-bold shadow mb-2">Our Vision</h2>
                            <p class="text-2xl text-white leading-relaxed">
                                Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text 
                            </p>
                        </div>
                    </div>
                </div>
                
   

                <!-- Core Values -->
                <div class="bg-gray-300 rounded-lg w-full p-4 mt-8 mx-auto">
                    <h2 class="text-5xl text-center font-bold mb-2 shadow-2xl">Core Values</h2>
                    <p class="text-gray-800 font-bold leading-relaxed text-center">
                    Sample Text
                    </p>
                    <p class="text-gray-800 leading-relaxed text-center w-1/2 mx-auto">
                    Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text 
                    </p>

                    <p class="text-gray-800 font-bold leading-relaxed text-center">
                    Sample Text
                    </p>
                    <p class="text-gray-800 leading-relaxed text-center w-1/2 mx-auto">
                    Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text 
                    </p>
                </div> 
                

                <!-- Process Section -->
                <div class=" p-4 mt-8 ">
                    <h2 class="text-5xl font-bold mb-2 text-center">Our Process</h2>
                    <img src="{{url('images/process1.jpg')}}" class="w-full h-1/2 mx-auto">
                </div>

                <div class="flex mx-auto">
                        <!-- What can offer-->
                        <div class="bg-gray-300 rounded-lg w-2/4 p-4 mt-8">
                            <h2 class="text-5xl text-center font-bold mb-2 shadow-2xl">What can we offer?</h2>
                            <p class="text-gray-800 leading-relaxed">
                            Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text Sample text 
                            </p>
                        </div>

                        <!-- Contacts -->
                        <div class="bg-gray-300 rounded-lg w-2/4 p-4 mt-8 ml-2 ">
                            <h2 class="text-5xl text-center font-bold mb-2 shadow-2xl">Contacts</h2>
            
                            <ul class="text-gray-800 leading-relaxed">
                                <li>Contact: 0987-654-3100</li>
                                <li>Email: sampleemail@email.com</li>
                                <li>Tel. No.: 8-7000</li>
                            </ul>

                        </div>
                </div>


                <!-- Job Section -->
                <div class="bg-gray-300 rounded-lg p-4 mt-8">
                    <h2 class="text-2xl font-bold mb-2">Explore Job Listings</h2>
                    <p class="text-gray-800 leading-relaxed">
                        Ready to take the next step in your career? Browse through our latest job listings and find your perfect match today!
                    </p>
                    <div class="mt-4">
                        <a href="/jobs" class="bg-red-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Browse Job Listings</a>
                    </div>
                </div>

                 <!-- Apply Section -->
                 <div class="bg-gray-300 rounded-lg p-4 mt-8">
                    <h2 class="text-2xl font-bold mb-2">Apply Now</h2>
                    <p class="text-gray-800 leading-relaxed">
                        Ready to apply for a job?
                    </p>
                    <div class="mt-4">
                        <a href="/applyNow" class="bg-red-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Apply Now</a>
                    </div>
                </div>

                <!-- Client Hiring Form Section -->
                <div class="bg-gray-300 rounded-lg p-4 mt-8">
                    <h2 class="text-2xl font-bold mb-2">Hire Now</h2>
                    <p class="text-gray-800 leading-relaxed">
                        Ready to hire for a worker?
                    </p>
                    <div class="mt-4">
                        <a href="/clientregistration" class="bg-red-800 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Hire Now</a>
                    </div>
                </div>

                
            </div>

            
        </div>
    </div>




    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto text-center">
            <div class="flex justify-center items-center">
                <img src="{{url('images/crewnnect1.png')}}" alt="Logo 1" class="w-44 h-10 mr-4">
            </div>
            <p>&copy; 2024 Crewnnect. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
