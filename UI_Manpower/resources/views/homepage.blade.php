<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOMEPAGE|CREWNNECT</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body  >
  
<nav class="bg-gray-300 p-4">
  
    <div class="container mx-auto flex justify-between items-center">
      <div>
        <a href="/homepage" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="/homepage" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Home</a></li>
          <li><a href="aboutUs" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">About Us</a></li>
          <li><a href="/jobs" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Jobs</a></li>
          <li><a href="/Contactus" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Contact Us</a></li>
          <li><a href="/applyNow" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Apply Now</a></li>
          <li><a href="/login" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Login</a></li>
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
  <section class=" relative py-6" style="background-image: url('images/draft background.jpg');">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div class="mb-1 text-center">
                  <h2 class="text-4xl text-center font-bold text-gray-900 leading-[3.25rem] mb-6 max-w-max lg:max-w-3xl lg:mx-auto">Crewnnect: Connecting Talent with Opportunity, Seamlessly.</h2>
                  <p class="text-base font-normal text-black lg:max-w-2xl lg:mx-auto mb-8">Using technology to make finance simpler, smarter and more rewarding. </p>  
                  <div class="flex flex-col justify-center md:flex-row gap-5 max-w-lg mx-auto md:max-w-2xl lg:max-w-full">   
                      <a href="javascript:;"  class="cursor-pointer bg-indigo-500 py-3 px-6 rounded-full flex items-center justify-center text-sm font-semibold text-white transition-all duration-500 focus:outline-none hover:bg-indigo-700">
                          Browse Jobs
                      </a>
                      <a href="javascript:;"  class="cursor-pointer bg-indigo-50 py-3 px-6 rounded-full flex items-center justify-center  text-sm font-semibold text-indigo-600 transition-all duration-500 focus:outline-none hover:bg-indigo-100">
                          Apply Now!
                      </a>
                  </div>
              </div>
              </section>
              <section class=" relative text-white py-20" style="background-image: url('images/draft background.jpg');">
             
    <div class="max-w-7xl mx-auto px-4">
    <h2 class=" text-4xl text-black font-bold mb-8">Our Success</h2>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-lg mx-auto md:max-w-2xl lg:max-w-full">
             
                  <div class="relative w-full h-auto md:col-span-2">
                      <div class="bg-gray-800 rounded-2xl flex  justify-between flex-row flex-wrap">
                          <div class="p-5  xl:p-8 w-full md:w-1/2 ">
                              <div class="block">
                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M15 12.5V18.75M18.75 2.5L11.25 2.5M15 28.75C8.7868 28.75 3.75 23.7132 3.75 17.5C3.75 11.2868 8.7868 6.25 15 6.25C21.2132 6.25 26.25 11.2868 26.25 17.5C26.25 23.7132 21.2132 28.75 15 28.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>                                    
                              </div>
                              <h3 class="text-lg font-bold xl:text-xl text-white py-5 w-full xl:w-64">
                              Client Testimonial
                              </h3>
                              <p class="text-xs font-normal text-gray-300 w-full mb-8 xl:w-64">"Crewnnect has truly transformed our business. Their innovative solutions and dedicated team have helped us achieve unprecedented success in our industry." </p>
                              <p class="text-white">- John Doe, CEO of ABC Corporation</p>
                              <button class="py-2 px-5 border border-solid border-gray-300 rounded-full gap-2 text-xs text-white font-semibold flex items-center justify-between transition-all duration-500 hover:bg-white/5">
                                  View More
                                  <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 9L3.58579 6.41421C4.25245 5.74755 4.58579 5.41421 4.58579 5C4.58579 4.58579 4.25245 4.25245 3.58579 3.58579L1 1" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      
                              </button>
                          </div>
                          <div class="relative hidden h-auto md:w-1/2 md:block">
                              <img src="https://m.samsungsem.com/resources/images/global/about_us/img_ceo.png" alt="Header tailwind Section" class="rounded-2xl h-96 ml-auto">
                          </div>
                      </div>
                  </div>
                  
                  <div class="relative w-full h-auto md:col-span-2">
                      <div class="bg-gray-800 rounded-2xl flex  justify-between flex-row flex-wrap">
                          <div class="p-5  xl:p-8 w-full md:w-1/2 ">
                              <div class="block">
                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M15 12.5V18.75M18.75 2.5L11.25 2.5M15 28.75C8.7868 28.75 3.75 23.7132 3.75 17.5C3.75 11.2868 8.7868 6.25 15 6.25C21.2132 6.25 26.25 11.2868 26.25 17.5C26.25 23.7132 21.2132 28.75 15 28.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>                                    
                              </div>
                              <h3 class="text-lg font-bold xl:text-xl text-white py-5 w-full xl:w-64">
                              Client Testimonial
                              </h3>
                              <p class="text-xs font-normal text-gray-300 w-full mb-8 xl:w-64">"Working with Crewnnect has been a game-changer for us. Their professionalism and expertise have elevated our projects to new heights, leading to remarkable growth and recognition." </p>
                              <p class="text-white">- Jane Smith, Founder of XYZ Inc.</p>
                              <button class="py-2 px-5 border border-solid border-gray-300 rounded-full gap-2 text-xs text-white font-semibold flex items-center justify-between transition-all duration-500 hover:bg-white/5">
                                  View More
                                  <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1 9L3.58579 6.41421C4.25245 5.74755 4.58579 5.41421 4.58579 5C4.58579 4.58579 4.25245 4.25245 3.58579 3.58579L1 1" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </svg>
                                      
                              </button>
                          </div>
                          <div class="relative hidden h-auto md:w-1/2 md:block">
                              <img src="https://366e203a.rocketcdn.me/wp-content/uploads/2023/06/Karen-Lynch.jpg" alt="Header tailwind Section" class="h-96 ml-auto">
                          </div>

                  </div>
</div>                 
</section>
                                            

<section class="py-24" style="background-image: url('images/draft background.jpg');">
        <div class="mx-auto max-w-7xl w-full px-4 sm:px-6 lg:px-8">
              <div class="mb-10 lg:mb-16 flex justify-center items-center flex-col gap-x-0 gap-y-6 lg:gap-y-0 lg:flex-row lg:justify-between max-md:max-w-lg max-md:mx-auto">
                  <div class="relative w-full text-center lg:text-left lg:w-2/4">
                      <h2 class="text-4xl font-bold text-gray-900 leading-[3.25rem] lg:mb-6 mx-auto max-w-max lg:max-w-md lg:mx-0">Unlocking Effiency Trough Innovative Manpower Solutions</h2>
                  </div>
                  <div class="relative w-full text-center  lg:text-left lg:w-2/4">
                      <p class="text-lg font-normal text-black font-semibold mb-5">We deliver a full suite of benefits to streamline your manpower needs effortlessly</p> 
                      <a href="/jobs" class="flex flex-row items-center justify-center gap-2 text-base font-semibold text-indigo-600 lg:justify-start hover:text-indigo-700 ">Learn more <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5" stroke="#4F46E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          </a> 
                  </div>
              </div>
              <div class="flex justify-center items-center gap-x-5 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
    <div class="group relative h-64 w-40 bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600">
        <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
        <img itemprop="contentUrl" src="https://www.svgrepo.com/show/385261/engineering-helmet-cog.svg" alt="Engineering Helmet Cog SVG File" title="Engineering Helmet Cog SVG File" width="30" height="30 ">
        </div>
        <h4 class="text-xl font-bold text-black mb-3 capitalize transition-all duration-500 group-hover:text-white">Engineering</h4>
        <p class="text-sm font-normal text-black transition-all duration-500 leading-5 group-hover:text-white">
        Engineering the future, one innovation at a time. 
        </p>
    </div>
                  <div class="group relative h-64 w-40 bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600" >
                      <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                      <img itemprop="contentUrl" src="https://www.svgrepo.com/show/455219/cruise-ship.svg" alt="Cruise Ship SVG File" title="Cruise Ship SVG File" width="30" height="30">
                              
                      </div>
                      <h4 class="text-xl font-bold text-black mb-3 capitalize transition-all duration-500 group-hover:text-white">Sea man</h4>
                      <p class="text-sm  text-black font-normal  text-black transition-all duration-500 leading-5 group-hover:text-white">
                          We have the most up-to-date security to support the security of all our customers in carrying out all transactions.  
                      </p>
                  </div>
                  <div class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600">
                      <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                          <img itemprop="contentUrl" src="https://www.svgrepo.com/show/371209/doctor.svg" alt="Doctor SVG File" title="Doctor SVG File" width="30" height="30">
                              
                      </div>
                      <h4 class="text-xl font-semibold text-black mb-3 capitalize transition-all duration-500 group-hover:text-white">Doctor </h4>
                      <p class="text-sm font-normal text-black transition-all duration-500 leading-5 group-hover:text-white">
                          Provide Customer Service For Those Of You Who Have Problems 24 Hours A Week  
                      </p>
                  </div>
                  <div class="group relative w-full bg-gray-100 rounded-2xl p-4 transition-all duration-500 max-md:max-w-md max-md:mx-auto md:w-2/5 md:h-64 xl:p-7 xl:w-1/4 hover:bg-indigo-600">
                      <div class="bg-white rounded-full flex justify-center items-center mb-5 w-14 h-14 ">
                      <img itemprop="contentUrl" src="https://www.svgrepo.com/show/504002/police-security-policeman.svg" alt="Police Security Policeman SVG File" title="Police Security Policeman SVG File" width="30" height="30">
                              
                      </div>
                      <h4 class="text-xl font-semibold text-black mb-3 capitalize transition-all duration-500 group-hover:text-white">Policeman</h4>
                      <p class="text-sm font-normal text-black transition-all duration-500 leading-5 group-hover:text-white">
                          We provide faster transaction speeds than competitors, so money arrives and is received faster. 
                      </p>
                  </div>
              </div>
        </div>
      </section>
                                            
</div>
</div>

<footer class="w-full bg-gray-300 py-2" >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <a href="#" class="flex justify-center "><img src="{{url('images/crewnnect1.png')}}" alt=""></a>

                 
                    <span class="text-lg text-gray-500 text-center block">©<a href="#">Crewnnect</a> 2024, All rights reserved.</span>
            </div>
        </div>
    </footer>
                                            




  
</body>
</html>
