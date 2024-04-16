<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLIENT DATA | CREWNNECT</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
<div class="flex flex-1 bg-gray-50">
    
    <div class="hidden md:flex md:w-max md:h-max md:flex-col">
        
        <div class="flex flex-col h-screen flex-grow pt-5 overflow-y-auto bg-white">
            <div class="flex items-center flex-shrink-0 px-4">
                <a href="/ClientData" class="h-10 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt="">
            </div>
                
            <div class="px-4 mt-8">
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

            <div class="px-4 mt-6">
                <hr class="border-gray-200" />
            </div>

            <div class="flex flex-col flex-1 px-3 mt-6">
                <div class="space-y-4">
                <nav class="flex-1 space-y-2">
                        <a href="/Data_Management" title="" class="flex items-center px-4 py-2.5 text-sm font-medium hover:text-white transition-all duration-200  hover:bg-indigo-900 rounded-lg group " >
                        <img class="flex-shrink-0 w-5 h-5 mr-4 text-black hover:text-white" itemprop="contentUrl" src="https://www.svgrepo.com/show/36341/database.svg" alt="Database SVG File" title="Database SVG File" width="150" height="150">
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
                                                            <div class="hidden origin-top-left  relative left-0 
                        mt-2 w-44 rounded-md shadow-lg bg-white
                        ring-1 ring-black ring-opacity-5 
                        animate-fadeIn" id="dropdownMenu1">
                       
                                            <a href="/WorkersData" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 ">
                                                             <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"></path>
                                                             
                                                            </svg>

                                                Workers Profile
                          
                                            </a>
                                </div>
                               
                               
                        <a href="#" class="flex bg-indigo-500  items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group"onclick="toggleDropdown('dropdownMenu2')">
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
                                                                                        <a href="/ClientData" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                        <img class="flex-shrink-0 w-5 h-5 bg-indigo-500  mr-4 text-black" itemprop="contentUrl" src="https://www.svgrepo.com/show/374595/client.svg" alt="Client SVG File" title="Client SVG File" width="150" height="150">          
                                                                                            Clients Profile
                                                                                        </a>
                                                                            </div>
                            
                            
                        <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900  hover:text-white rounded-lg hover:bg-indigo-600 group"onclick="toggleDropdown('dropdownMenu3')">
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
                                                                                                                <a href="/ApplicationData" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 mr-4 text-black">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                    </svg>
                                                                                                                    Clients Applications
                                                                                                                </a>
                                                                                                                <a href="/application" class="flex  items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
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
                                                                                                                <a href="/home" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4 "itemprop="contentUrl" src="https://www.svgrepo.com/show/433078/home-detailed.svg" alt="Home Detailed SVG File" title="Home Detailed SVG File" width="150" height="150">
                      </svg>
                                                                                                                    Home
                                                                                                                </a>
                                                                                                                <a href="/aboutus" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/356999/about.svg" alt="About SVG File" title="About SVG File" width="150" height="150">
                                                                                                                    About Us
                                                                                                                </a>
                                                                                                                <a href="/job" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4"itemprop="contentUrl" src="https://www.svgrepo.com/show/375371/cloud-jobs-api.svg" alt="Cloud Jobs Api SVG File" title="Cloud Jobs Api SVG File" width="150" height="150">
                                                                                                                    Job
                                                                                                                </a>
                                                                                                                <a href="/joblisting" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4"itemprop="contentUrl" src="https://www.svgrepo.com/show/8634/workers.svg" alt="Workers SVG File" title="Workers SVG File" width="150" height="150">
                                                                                                                    Job Listing
                                                                                                                </a>
                                                                                                                <a href="/News" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/362130/news.svg" alt="News SVG File" title="News SVG File" width="150" height="150">
                                                                                                                    News
                                                                                                                </a>
                                                                                                                <a href="/Newslisting" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/449160/news-collection.svg" alt="News Collection SVG File" title="News Collection SVG File" width="150" height="150">
                                                                                                                    News Listing
                                                                                                                </a>
                                                                                                                <a href="/CU" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 "itemprop="contentUrl" src="https://www.svgrepo.com/show/415832/contact-phonebook-support.svg" alt="Contact Phonebook Support SVG File" title="Contact Phonebook Support SVG File" width="150" height="150">       
                                                                                                                    Contact Us
                                                                                                                </a>
                                                                                                                <a href="/CardsA" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/136295/contact-details.svg" alt="Contact Details SVG File" title="Contact Details SVG File" width="150" height="150">
                                                                                                                    Cards: About Details
                                                                                                                </a>
                                                                                                                <a href="/CardsT" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class=" flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/484046/team.svg" alt="Team SVG File" title="Team SVG File" width="150" height="150">
                                                                                                                    Cards: Team Lists
                                                                                                                </a>
                                                                                                                <a href="/CardsS" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4 " itemprop="contentUrl" src="https://www.svgrepo.com/show/8634/workers.svg" alt="Workers SVG File" title="Workers SVG File" width="150" height="150">
                                                                                                                    Cards: Service Lists
                                                                                                                </a>
                                                                                                                <a href="/CardsSP" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4"itemprop="contentUrl" src="https://www.svgrepo.com/show/110702/computer-and-earth-spheres.svg" alt="Computer And Earth Spheres SVG File" title="Computer And Earth Spheres SVG File" width="150" height="150">
                                                                                                                    Cards: Spheres Lists
                                                                                                                </a>

                                                                                                                </a>
                                                                                                                </a>
                                                                                                                <a href="/Partner" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img  class="flex-shrink-0 w-5 h-5 mr-4" itemprop="contentUrl" src="https://www.svgrepo.com/show/58739/handshake.svg" alt="Handshake SVG File" title="Handshake SVG File" width="150" height="150">
                                                                                                                    Cards: Partner Lists
                                                                                                                </a>

                                                                                                                </a>
                                                                                                                <a href="/Value" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                <img class="flex-shrink-0 w-5 h-5 mr-4" itemprop="contentUrl" src="https://www.svgrepo.com/show/159681/dollar-coin-on-hand.svg" alt="Dollar Coin On Hand SVG File" title="Dollar Coin On Hand SVG File" width="150" height="150">
                                                                                                                    Cards: Value Lists
                                                                                                                </a>

                                                                                                                <a href="/Crewnnect" class="flex items-center px-4 py-2.5 text-sm font-medium transition-all duration-200 text-gray-900 hover:text-white rounded-lg hover:bg-indigo-600 group">
                                                                                                                                    <img class="flex-shrink-0 w-5 h-5 mr-4"itemprop="contentUrl" src="images/logo.png" alt="Computer And Earth Spheres SVG File" title="Computer And Earth Spheres SVG File" width="150" height="150">
                                                                                                                    Cards: Why Crewnnect??
                                                                                                                </a>
                                                                                                    </div>
                               
                           </nav>
                </div>
                    
            </div>
        </div>
    </div>
    <div class="container mt-2 mx-auto px-4 sm:px-6 lg:px-8 py-8">
          <!-- Dropdowns with buttons -->
    <div class="flex float-right mx-2">
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

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // Add any customization options here
        });
    });
</script>
    </div>
</div>

<script>
    function toggleDropdown(menuId) {
    const dropdownMenu = document
    .getElementById(menuId);
    dropdownMenu.classList.toggle('hidden');
}
</script>
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-gray-200 h-96 mt-20" >
    <h2 class="text-2xl font-bold mb-4">Client's Profile</h2>
    <table id="example" class="table-auto relative w-max">
        <thead>
            <tr>
            
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Position</th>
                <th class="px-4 py-2">Office</th>
                <th class="px-4 py-2">Age</th>

            </tr>
            <tbody>
            <tr>
                <td class="border px-4 py-2">Maricar Tolentino</td>
                <td class="border px-4 py-2">System Architect</td>
                <td class="border px-4 py-2">Kings Court</td>
                <td class="border px-4 py-2">18</td>
            

        

            </tr>
        </thead>
        <tbody>
</div>
</div>
   
</body>


</html>