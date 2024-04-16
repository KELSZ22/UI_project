<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JOBS | CREWNNECT</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
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
            <img class="h-6 mr-3 mb-1 inline-block" src="images/contact-us.png"> </a></li>
          <li><a href="/applyNow" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Apply Now</a></li>
          <a href="/login"><img class="h-8 inline-block my-1 rounded-full hover:bg-red-800" src="images/icon.png"></a>
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

  <div class="flex h-screen">

  
   <!-- Sidebar -->
<div class="bg-gray-800 text-white w-48 flex-shrink-0">
    <div class="p-4">
        <div class="mb-4">
            <h1 id="sidebarHeader" class="text-xl font-bold mb-2 text-center">Jobs Available</h1>
        </div>
    
       
        <a href="#" onclick="showJobs(event, ['Steelmen', 'Plate Welders', 'Pipelayers', 'Electricians', 'Air Conditioning Technician', 'Aluminum and Glass Technicians', 'Pipe Fitters', 'Plumbers', 'Fire Protection Technicians', 'Carpenters', 'Gypsum Board Installers', 'Decorative Technicians', 'Plasterers', 'Masons', 'Bricklayers', 'Painters', 'Scaffolders'], this)" class="sidebar-link flex items-center block py-2 px-4 rounded hover:bg-red-800 text-justify">
    <img class="h-8 inline-block mr-2" src="https://i.ibb.co/dJwYxxZ/1.png" alt="Circular Saw Icon">
    Construction
</a>
<div class="my-2"></div> 
        <a href="#" onclick="showJobs(event, ['Special Education', 'Early Childhood Education', 'Pre-School', 'Speech and Language', 'English Language', 'Physical Education', 'Elementary Education', 'Intermediate Education', 'College Professors', 'Special Tutors'], this)" class="sidebar-link block py-2 px-4 rounded hover:bg-red-800">
      <img class="h-8 inline-block mr-2" src="https://i.ibb.co/tsgFQVD/2.png" alt="Education Icon">
      Education
</a>
<div class="my-2"></div> 
        <a href="#" onclick="showJobs(event, ['Chef', 'Sous Chef', 'Waiters', 'Chamber Maids', 'Baristas', 'Receptionists', 'Front Desk Officers', 'Security Guards', 'Bellboys', 'Busboys', 'Kitchen Helpers'], this)" class="sidebar-link block py-2 px-4 rounded hover:bg-red-800">
      <img class="h-8 inline-block mr-2" src="https://i.ibb.co/SnKcLpK/3.png" alt="Help Icon">
      Hospitality
</a>
<div class="my-2"></div> 
        <a href="#" onclick="showJobs(event, ['Web Design', 'Data Science and Analytics', 'Cybersecurity', 'Artificial Intelligence and Machine Learning', 'Network and Systems Administration', 'Mobile Application Development', 'Technical Writing', 'Digital Marketing and E-Commerce', 'Cloud Computing'], this)" class="sidebar-link block flex items-center py-2 px-4 rounded hover:bg-red-800 text-center text-justify">
      <img class="h-8 inline-block mr-2" src="https://i.ibb.co/8dR5KVq/4.png" alt="IT Icon">
       Information Technology
</a>
<div class="my-2"></div> 
        <a href="#" onclick="showJobs(event, ['Garments- Sewers, Cutters', 'Semi-Conductor-Assemblers', 'Food- Packers, Food Technicians', 'Automotive- Assemblers, Painters, Mechanics', 'Heavy Machineries- Mechanical Technicians', 'Specialized Machine Operators'], this)" class="sidebar-link flex items-center py-2 px-4 rounded hover:bg-red-800 text-justify">
     <img class="h-8 inline-block mr-2" src="https://i.ibb.co/F8R8bZj/5.png" alt="Manufacturing Icon">
     Manufacturing
</a>
<div class="my-2"></div> 
        <a href="#" onclick="showJobs(event, ['NURSES with specialities in;', 'Emergency and Trauma', 'Critical Care', 'Oncology', 'Geriatrics', 'Pediatrics', 'Pre-operational Care', 'Cardiac', 'Dialysis', 'Neo-natal', 'Acute Care', 'Anesthetics', 'Other Medical Fields', 'Physical Therapists', 'Radiology Technicians', 'Bioinformatics Technicians', 'Biotechnologists', 'Biochemists', 'Speech Pathologists', 'Dental Technicians'], this)" class="sidebar-link block flex items-center py-2 px-4 rounded hover:bg-red-800 text-center text-justify">
      <img class="h-8 inline-block items-center justify-center mr-2" src="https://i.ibb.co/GJ51Xtr/6.png" alt="Hospital Icon">
      Medical and Healthcare
</a>
<div class="my-2"></div> 
        <a href="#" onclick="showJobs(event, ['Aestheticians', 'Massage Therapist', 'Hair Dressers', 'Make-Up Artists', 'Nail Technician'], this)" class="sidebar-link flex items-center block py-2 px-4 rounded hover:bg-red-800 text-center text-justify">
      <img class="h-8 inline-block items-center justify-center mr-2" src="https://i.ibb.co/WGY7J32/7.png" alt="Make Up Icon">
      Personal Beauty and Wellness
</a>
<div class="my-2"></div> 
        <a href="#" onclick="showJobs(event, ['Sales Specialist', 'Cashiers', 'Storekeepers', 'Stock and Inventory Personnel', 'Fashion Consultants', 'Personal Shoppers', 'Customer Service Specialists'], this)" class="sidebar-link block py-2 px-4 rounded hover:bg-red-800">
      <img class="h-8 inline-block mr-2" src="https://i.ibb.co/NSNctFv/8.png" alt="Shopping Icon">
      Retail
</a>
    </div>
</div>

    
     <!-- Content Area -->
     <div class="flex-grow p-8">
        <div id="jobList" class="hidden">
            <div class="gap-4">
                <!-- Jobs will be displayed here -->
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-300 p-3 relative grid grid-cols-2 left-0 right-0 ml-auto mr-auto">
                    <div class="place-items-center col-span-1 float-left">
                        <h1>NEED WORKERS?</h1>
                        <h2>Unlock Global Talent:</h2>
                        <p>Partner with Us for Exceptional Recruitment Solutions Abroad!</p>
                    </div>
                    <div class="pt-0 col-span-1 float-right">
                        <a href="/applyNow" class="float-right">
                        <button class="bg-red-800 font-bold text-white rounded-md hover:bg-blue-800 px-4 py-2">Join Us</button>
                        </a>
                    </div>
                </div>

<!-- Footer -->
<footer class="px-2 sm:px-4 py-4 bg-gray-800 dark:bg-gray-600 items-center md:p-6 text-center flex flex-col relative">
    <span class="text-sm text-white dark:text-red-200 sm:text-center">
       © 2024 Crewnnect. All rights reserved.
    </span>
    <span class="absolute bottom-1 text-xs text-white dark:text-red-400">Powered by: <a href="https://www.negosyante-it.solutions">www.negosyante-it.solutions</a></span>
</footer>

<script>
   function showJobs(event, jobs, clickedLink) {
    event.preventDefault();
    
    // Remove 'bg-red-800' class from all sidebar links
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    sidebarLinks.forEach(link => {
        link.classList.remove('bg-red-800');
    });

    // Add 'bg-red-800' class to the clicked sidebar link
    clickedLink.classList.add('bg-red-800');
    
    // Show the jobs for the clicked section
    const jobListContainer = document.getElementById("jobList");
    jobListContainer.classList.remove("hidden");
    
    // Clear previous job list content
    jobListContainer.innerHTML = "";

    if (jobs.length > 9) {
        // If there are more than 5 jobs, create a grid layout
        const jobList = document.createElement("ul");
        jobList.classList.add("grid", "grid-cols-2", "gap-2"); 
        // Add grid classes
        jobs.forEach(job => {
            const jobItem = document.createElement("li");
            jobItem.textContent = job;
            jobItem.classList.add("list-disc", "text-lg", "gap-4"); 
            jobList.appendChild(jobItem);
        });
        jobListContainer.appendChild(jobList);
    } else {
        // If there are 5 or fewer jobs, create a single column list
        const jobList = document.createElement("ul");
        jobList.classList.add("list-disc", "gap-6"); 
        jobs.forEach(job => {
            const jobItem = document.createElement("li");
            jobItem.textContent = job;
            jobItem.classList.add("list-disc", "text-lg", "gap-6");
            jobList.appendChild(jobItem);
        });
        jobListContainer.appendChild(jobList);
    }
  }
</script>

</body>
</html>
