<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link class="h-20 w-20" rel="icon" type="x-icon" href="images/logo.png">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
<nav class="bg-white p-4">
  <div class="container  flex justify-between items-center">
    <div>
      <a href="#" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
    </div>
     
    <!-- Dropdowns with buttons -->
    <div class="flex mx-2">
      <!-- Dropdown to the Right -->
      <div class="relative inline-block text-left mr-2">
        <a class="px-4 py-2 bg-white text-black
                       rounded-md shadow hover:bg-gray-300
                       focus:outline-none"
                onclick="toggleDropdown('dropdownMenuRight')">
          Account 
          <!-- Add down symbol here -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-middle mb-2 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 17a1 1 0 0 1-.707-.293l-5-5a1 1 0 0 1 1.414-1.414L10 14.586l4.293-4.293a1 1 0 0 1 1.414 1.414l-5 5A1 1 0 0 1 10 17z" clip-rule="evenodd" />
          </svg>
        </a>
        <div class="hidden origin-top-right absolute 
                    right-0 mt-2 w-56 rounded-md 
                    shadow-lg bg-white ring-1
                    ring-black ring-opacity-5
                    animate-fadeIn"
             id="dropdownMenuRight">
          <a href="#" class="block px-4 py-2 text-sm 
                             text-gray-700 
                             hover:bg-gray-100">
            Profile
          </a>
          <a href="#" class="block px-4 py-2 text-sm
                             text-gray-700 
                             hover:bg-gray-100">
            Log-out
          </a>
        </div>
      </div>
    </div>

</script>   
    <script src="js/app.js"></script>
   
</nav>
<div class="flex flex-1 bg-gray-50">
    
    <div class="hidden md:flex md:w-max md:h-max md:flex-col">
        
        <div class="flex flex-col h-screen flex-grow pt-5 overflow-y-auto bg-gray-200">
           

            <div class="px-4 mt-1">
                <label for="" class="sr-only"> Search </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <input type="search" name="" id="" class="block w-full py-2 pl-10 border border-gray-300 rounded-lg focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm" placeholder="Search here" />
                </div>
            </div>

            <div class="px-4 mt-4">
                <hr class="border-gray-200" />
            </div>

            <div class="flex flex-col flex-1 px-3 mt-2">
                <div class="space-y-4">
                    <nav class="flex-1 space-y-2">
<<<<<<< HEAD
                        <a href="/DataManagement" title="" class="flex items-center px-4 py-2.5 text-sm font-medium hover:text-white transition-all duration-200 hover:bg-indigo-600 rounded-lg group " >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                <path d="M17.004 10.407c.138.435-.216.842-.672.842h-3.465a.75.75 0 01-.65-.375l-1.732-3c-.229-.396-.053-.907.393-1.004a5.252 5.252 0 016.126 3.537zM8.12 8.464c.307-.338.838-.235 1.066.16l1.732 3a.75.75 0 010 .75l-1.732 3.001c-.229.396-.76.498-1.067.16A5.231 5.231 0 016.75 12c0-1.362.519-2.603 1.37-3.536zM10.878 17.13c-.447-.097-.623-.608-.394-1.003l1.733-3.003a.75.75 0 01.65-.375h3.465c.457 0 .81.408.672.843a5.252 5.252 0 01-6.126 3.538z"></path>
                <path fill-rule="evenodd" d="M21 12.75a.75.75 0 000-1.5h-.783a8.22 8.22 0 00-.237-1.357l.734-.267a.75.75 0 10-.513-1.41l-.735.268a8.24 8.24 0 00-.689-1.191l.6-.504a.75.75 0 10-.964-1.149l-.6.504a8.3 8.3 0 00-1.054-.885l.391-.678a.75.75 0 10-1.299-.75l-.39.677a8.188 8.188 0 00-1.295-.471l.136-.77a.75.75 0 00-1.477-.26l-.136.77a8.364 8.364 0 00-1.377 0l-.136-.77a.75.75 0 10-1.477.26l.136.77c-.448.121-.88.28-1.294.47l-.39-.676a.75.75 0 00-1.3.75l.392.678a8.29 8.29 0 00-1.054.885l-.6-.504a.75.75 0 00-.965 1.149l.6.503a8.243 8.243 0 00-.689 1.192L3.8 8.217a.75.75 0 10-.513 1.41l.735.267a8.222 8.222 0 00-.238 1.355h-.783a.75.75 0 000 1.5h.783c.042.464.122.917.238 1.356l-.735.268a.75.75 0 10.513 1.41l.735-.268c.197.417.428.816.69 1.192l-.6.504a.75.75 0 10.963 1.149l.601-.505c.326.323.679.62 1.054.885l-.392.68a.75.75 0 101.3.75l.39-.679c.414.192.847.35 1.294.471l-.136.771a.75.75 0 101.477.26l.137-.772a8.376 8.376 0 001.376 0l.136.773a.75.75 0 101.477-.26l-.136-.772a8.19 8.19 0 001.294-.47l.391.677a.75.75 0 101.3-.75l-.393-.679a8.282 8.282 0 001.054-.885l.601.504a.75.75 0 10.964-1.15l-.6-.503a8.24 8.24 0 00.69-1.191l.735.268a.75.75 0 10.512-1.41l-.734-.268c.115-.438.195-.892.237-1.356h.784zm-2.657-3.06a6.744 6.744 0 00-1.19-2.053 6.784 6.784 0 00-1.82-1.51A6.704 6.704 0 0012 5.25a6.801 6.801 0 00-1.225.111 6.7 6.7 0 00-2.15.792 6.784 6.784 0 00-2.952 3.489.758.758 0 01-.036.099A6.74 6.74 0 005.251 12a6.739 6.739 0 003.355 5.835l.01.006.01.005a6.706 6.706 0 002.203.802c.007 0 .014.002.021.004a6.792 6.792 0 002.301 0l.022-.004a6.707 6.707 0 002.228-.816 6.781 6.781 0 001.762-1.483l.009-.01.009-.012a6.744 6.744 0 001.18-2.064c.253-.708.39-1.47.39-2.264a6.74 6.74 0 00-.408-2.308z" clip-rule="evenodd"></path>
              </svg>
=======
                        <a href="#" title="" class="flex items-center px-4 py-2.5 text-sm font-medium hover:text-white transition-all duration-200 hover:bg-indigo-600 rounded-lg group " >
                        <img class="flex-shrink-0 w-5 h-5 mr-4 text-black" itemprop="contentUrl" src="https://www.svgrepo.com/show/36341/database.svg" alt="Database SVG File" title="Database SVG File" width="150" height="150">
>>>>>>> 4805189 (mari3)
                            Data Management
                        </a>
                     
                            <!-- Dropdown to the Right -->
                          
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group"onclick="toggleDropdown('dropdownMenu1')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd"></path>
                    <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z"></path>
                </svg>
                            Workers Data
                            <svg class="w-4 h-6 ml-auto text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
<<<<<<< HEAD
                                                            <div class="hidden origin-bottom relative left-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1
                        ring-black ring-opacity-5 animate-fadeIn" id="dropdownMenu1">
                                            <a href="/WorkersData" class="block px-2 py-2 text-sm 
                                                                text-gray-700 
                                                                hover:bg-gray-100">
=======
                                                            <div class="hidden origin-top-left  relative left-0 
                        mt-2 w-44 rounded-md shadow-lg bg-white
                        ring-1 ring-black ring-opacity-5 
                        animate-fadeIn" id="dropdownMenu1">
                       
                                            <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 ">
                                                             <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"></path>
                                                             
                                                            </svg>

>>>>>>> 4805189 (mari3)
                                                Workers Profile
                          
                                            </a>
                                </div>
                               
                               
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group"onclick="toggleDropdown('dropdownMenu2')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                    <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd"></path>
                </svg>
                            Client Data
                            <svg class="w-4 h-6 ml-auto text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                                                                    <div class="hidden origin-bottom relative left-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1
                                                                    ring-black ring-opacity-5 animate-fadeIn" id="dropdownMenu2">
                                                                                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                        <img class="flex-shrink-0 w-5 h-5 mr-4 text-black" itemprop="contentUrl" src="https://www.svgrepo.com/show/374595/client.svg" alt="Client SVG File" title="Client SVG File" width="150" height="150">          
                                                                                            Clients Profile
                                                                                        </a>
                                                                            </div>
                            
                            
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group"onclick="toggleDropdown('dropdownMenu3')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z"></path>
                </svg>
                            Application
                            <svg class="w-4 h-6 ml-auto text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                                                <div class="hidden origin-bottom relative left-0 mt-2 w-50 rounded-md shadow-lg bg-white ring-1
                                                                                            ring-black ring-opacity-5 animate-fadeIn" id="dropdownMenu3">
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                    </svg>
                                                                                                                    Clients Applications
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"></path>
                    </svg>
                                                                                                                    Applicants
                                                                                                                </a>
                                                                                                    </div>
                                
                              
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group"onclick="toggleDropdown('dropdownMenu4')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                            <path d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z"></path>
                        </svg>
                            Website

                            <svg class="w-4 h-6 ml-auto text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <div class="hidden origin-bottom relative left-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1
                                                                                            ring-black ring-opacity-5 animate-fadeIn" id="dropdownMenu4">
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4 "itemprop="contentUrl" src="https://www.svgrepo.com/show/433078/home-detailed.svg" alt="Home Detailed SVG File" title="Home Detailed SVG File" width="150" height="150">
                      </svg>
                                                                                                                    Home
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/356999/about.svg" alt="About SVG File" title="About SVG File" width="150" height="150">
                                                                                                                    About Us
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4"itemprop="contentUrl" src="https://www.svgrepo.com/show/375371/cloud-jobs-api.svg" alt="Cloud Jobs Api SVG File" title="Cloud Jobs Api SVG File" width="150" height="150">
                                                                                                                    Job
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4"itemprop="contentUrl" src="https://www.svgrepo.com/show/8634/workers.svg" alt="Workers SVG File" title="Workers SVG File" width="150" height="150">
                                                                                                                    Job Listing
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/362130/news.svg" alt="News SVG File" title="News SVG File" width="150" height="150">
                                                                                                                    News
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/449160/news-collection.svg" alt="News Collection SVG File" title="News Collection SVG File" width="150" height="150">
                                                                                                                    News Listing
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 "itemprop="contentUrl" src="https://www.svgrepo.com/show/415832/contact-phonebook-support.svg" alt="Contact Phonebook Support SVG File" title="Contact Phonebook Support SVG File" width="150" height="150">       
                                                                                                                    Contact Us
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/136295/contact-details.svg" alt="Contact Details SVG File" title="Contact Details SVG File" width="150" height="150">
                                                                                                                    Cards: About Details
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class=" flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/484046/team.svg" alt="Team SVG File" title="Team SVG File" width="150" height="150">
                                                                                                                    Cards: Team Lists
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/8634/workers.svg" alt="Workers SVG File" title="Workers SVG File" width="150" height="150">
                                                                                                                    Cards: Service Lists
                                                                                                                </a>
                                                                                                                <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4"itemprop="contentUrl" src="https://www.svgrepo.com/show/110702/computer-and-earth-spheres.svg" alt="Computer And Earth Spheres SVG File" title="Computer And Earth Spheres SVG File" width="150" height="150">
                                                                                                                    Cards: Spheres Lists
                                                                                                                </a>
                                                                                                    </div>
                               
                           </nav>
                    <hr class="border-gray-200" />

                    <nav class="flex-1 space-y-2">
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                            <svg class="flex-shrink-0 w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                                />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Settings
                        </a>
                        <script>
    function toggleDropdown(menuId) {
    const dropdownMenu = document
    .getElementById(menuId);
    dropdownMenu.classList.toggle('hidden');
}
</script>
                    </nav>
                </div>
                    
            </div>
        </div>
    </div>
</div>
    










</body>
</html>