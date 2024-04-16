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
          <li><a href="aboutus" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">About Us</a></li>
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
                              <img src="https://m.samsungsem.com/resources/images/global/about_us/img_ceo.png" alt="Header tailwind Section" class="h-96 ml-auto">
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
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
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

                    <svg class="w-40 h-8" viewBox="0 0 164 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        
                        <defs>
                        <linearGradient id="paint0_linear_9129_4680" x1="35" y1="1.89063" x2="1.11152" y2="33.4573" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7C3AED"></stop>
                        <stop offset="0.993738" stop-color="#4F46E5"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_9129_4680" x1="35" y1="1.89063" x2="1.11152" y2="33.4573" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7C3AED"></stop>
                        <stop offset="0.993738" stop-color="#4F46E5"></stop>
                        </linearGradient>
                        </defs>
                        </svg>
                </a>
                    <ul class="text-lg flex items-center justify-center flex-col gap-7 md:flex-row md:gap-12 transition-all duration-500 py-16 mb-4 border-b border-gray-200">
                        <li><a href="#" class="text-gray-800 hover:text-gray-900">Crewnnect</a></li>
                        <li><a href="#" class=" text-gray-800 hover:text-gray-900">About</a></li>
                        <li><a href="#" class=" text-gray-800 hover:text-gray-900">Jobs</a></li>
                        <li><a href="#" class=" text-gray-800 hover:text-gray-900">Apply Now</a></li>
                        <li><a href="#" class=" text-gray-800 hover:text-gray-900">Contact</a></li>

                    </ul>
                    <div class="flex space-x-10 justify-center items-center mb-14">
                        <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                          <svg class="w-[1.688rem] h-[1.688rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
                            <path d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z" fill="currentColor"/>
                          </svg>
                        </a>
                        <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                            <svg class="w-[1.688rem] h-[1.688rem] " viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.76556 14.8811C9.76556 12.3243 11.8389 10.2511 14.3972 10.2511C16.9555 10.2511 19.03 12.3243 19.03 14.8811C19.03 17.4379 16.9555 19.5111 14.3972 19.5111C11.8389 19.5111 9.76556 17.4379 9.76556 14.8811ZM7.26117 14.8811C7.26117 18.82 10.456 22.0129 14.3972 22.0129C18.3385 22.0129 21.5333 18.82 21.5333 14.8811C21.5333 10.9422 18.3385 7.7493 14.3972 7.7493C10.456 7.7493 7.26117 10.9422 7.26117 14.8811ZM20.1481 7.46652C20.148 7.79616 20.2457 8.11843 20.4288 8.39258C20.6119 8.66674 20.8723 8.88046 21.177 9.00673C21.4817 9.133 21.8169 9.16614 22.1405 9.10196C22.464 9.03778 22.7612 8.87916 22.9945 8.64617C23.2278 8.41318 23.3868 8.11627 23.4513 7.79299C23.5157 7.46972 23.4829 7.13459 23.3568 6.83C23.2307 6.5254 23.017 6.26502 22.7428 6.08178C22.4687 5.89853 22.1463 5.80065 21.8164 5.80052H21.8158C21.3737 5.80073 20.9497 5.9763 20.637 6.28867C20.3243 6.60104 20.1485 7.02467 20.1481 7.46652ZM8.78274 26.1863C7.42782 26.1246 6.69138 25.8991 6.20197 25.7085C5.55314 25.4561 5.0902 25.1554 4.60346 24.6696C4.11672 24.1839 3.81543 23.7216 3.56395 23.0732C3.37317 22.5843 3.14748 21.8481 3.08588 20.494C3.01851 19.03 3.00506 18.5902 3.00506 14.8812C3.00506 11.1722 3.01962 10.7336 3.08588 9.26841C3.14759 7.9143 3.37495 7.17952 3.56395 6.68919C3.81654 6.04074 4.11739 5.57808 4.60346 5.09163C5.08953 4.60519 5.55203 4.30408 6.20197 4.05274C6.69116 3.86208 7.42782 3.63652 8.78274 3.57497C10.2476 3.50763 10.6877 3.49419 14.3972 3.49419C18.1068 3.49419 18.5473 3.50874 20.0134 3.57497C21.3683 3.63663 22.1035 3.86385 22.5941 4.05274C23.243 4.30408 23.7059 4.60585 24.1926 5.09163C24.6794 5.57741 24.9796 6.04074 25.2322 6.68919C25.4229 7.17808 25.6486 7.9143 25.7102 9.26841C25.7776 10.7336 25.7911 11.1722 25.7911 14.8812C25.7911 18.5902 25.7776 19.0287 25.7102 20.494C25.6485 21.8481 25.4217 22.5841 25.2322 23.0732C24.9796 23.7216 24.6787 24.1843 24.1926 24.6696C23.7066 25.155 23.243 25.4561 22.5941 25.7085C22.105 25.8992 21.3683 26.1247 20.0134 26.1863C18.5485 26.2536 18.1084 26.2671 14.3972 26.2671C10.686 26.2671 10.2472 26.2536 8.78274 26.1863ZM8.66768 1.0763C7.18823 1.14363 6.17729 1.37808 5.29443 1.72141C4.3801 2.07597 3.60608 2.55163 2.83262 3.32341C2.05916 4.09519 1.58443 4.86997 1.22966 5.78374C0.88612 6.66663 0.651535 7.67641 0.584162 9.15497C0.515676 10.6359 0.5 11.1093 0.5 14.8811C0.5 18.6529 0.515676 19.1263 0.584162 20.6072C0.651535 22.0859 0.88612 23.0955 1.22966 23.9784C1.58443 24.8916 2.05927 25.6673 2.83262 26.4387C3.60597 27.2102 4.3801 27.6852 5.29443 28.0407C6.17896 28.3841 7.18823 28.6185 8.66768 28.6859C10.1502 28.7532 10.6232 28.77 14.3972 28.77C18.1713 28.77 18.645 28.7543 20.1268 28.6859C21.6063 28.6185 22.6166 28.3841 23.5 28.0407C24.4138 27.6852 25.1884 27.2105 25.9618 26.4387C26.7353 25.667 27.209 24.8916 27.5648 23.9784C27.9083 23.0955 28.144 22.0857 28.2103 20.6072C28.2777 19.1252 28.2933 18.6529 28.2933 14.8811C28.2933 11.1093 28.2777 10.6359 28.2103 9.15497C28.1429 7.6763 27.9083 6.66608 27.5648 5.78374C27.209 4.87052 26.7341 4.09641 25.9618 3.32341C25.1896 2.55041 24.4138 2.07597 23.5011 1.72141C22.6166 1.37808 21.6062 1.14252 20.1279 1.0763C18.6461 1.00897 18.1724 0.992188 14.3983 0.992188C10.6243 0.992188 10.1502 1.00785 8.66768 1.0763Z" fill="currentColor"/>
                                </svg>
                                
                        </a>
                        <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                            <svg class="w-[0.938rem] h-[1.625rem]" viewBox="0 0 15 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7926 14.4697L14.5174 9.86889H10.0528V6.87836C10.0528 5.62033 10.6761 4.39105 12.6692 4.39105H14.7275V0.473179C13.5289 0.282204 12.3177 0.178886 11.1037 0.164062C7.42917 0.164062 5.0302 2.37101 5.0302 6.36077V9.86889H0.957031V14.4697H5.0302V25.5979H10.0528V14.4697H13.7926Z" fill="currentColor"/>
                                </svg>
                                
                        </a>
                        <a href="#" class="block  text-gray-900 transition-all duration-500 hover:text-indigo-600 ">
                            <svg class="w-[1.875rem] h-[1.375rem]" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.3106 1.27838C27.5782 1.62071 28.5745 2.61957 28.9113 3.88573C29.524 6.18356 29.524 10.9809 29.524 10.9809C29.524 10.9809 29.524 15.7782 28.9113 18.076C28.5698 19.3469 27.5735 20.3457 26.3106 20.6834C24.0186 21.2977 14.8226 21.2977 14.8226 21.2977C14.8226 21.2977 5.63122 21.2977 3.33456 20.6834C2.06695 20.3411 1.07063 19.3422 0.73385 18.076C0.121094 15.7782 0.121094 10.9809 0.121094 10.9809C0.121094 10.9809 0.121094 6.18356 0.73385 3.88573C1.07531 2.61488 2.07162 1.61602 3.33456 1.27838C5.63122 0.664062 14.8226 0.664062 14.8226 0.664062C14.8226 0.664062 24.0186 0.664062 26.3106 1.27838ZM19.5234 10.9809L11.885 15.403V6.55872L19.5234 10.9809Z" fill="currentColor"/>
                                </svg>
                                
                        </a>
                    </div>
                    <span class="text-lg text-gray-500 text-center block">©<a href="#">Crewnnect</a> 2024, All rights reserved.</span>
            </div>
        </div>
    </footer>
                                            




  
</body>
</html>
