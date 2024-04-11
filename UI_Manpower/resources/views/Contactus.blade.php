<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <nav class="bg-gray-300 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div >
        <a href="#" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="/homepage" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="/Contactus" class="text-black hover:text-red-300">Contact Us</a></li>
          <a href="#"><img class="h-8"
                    src="images/contact-us.png"></a>
          <li><a href="#" class="text-black hover:text-red-300">Apply Now</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Login</a></li>
          <a href="#"><img class="h-8"
                    src="images/icon.png">
</a>
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
          <li><a href="#" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Contact Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Apply Now</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Login</a></li>
      </ul>
    </div>
  </nav>
 
  <main class="h-full sm:h-screen bg-no-repeat bg-center bg-cover" style="background-image: url('https://ik.imagekit.io/upgrad1/marketing-platform-assets/new-images/home/slide-images/free-101__1592577223094.png');">
            <div class="h-full sm:h-screen w-full absolute bg-slate-400 opacity-50"></div>
            <section id="home-contact" class="h-full mt-0">
            <div class="relative p-10 pb-0 block lg:grid grid-cols-2 gap-4 place-items-right text-white w-full left-0 right-0">
                   
                    <div class="p-0 lg:pl-16 pl-3 pr-3 pb-3 lg:pt-5 lg:pr-16 h-full z-auto bg-gray-400 shadow-[0_50px_25px_-24px_rgb(0,0,0,0.3)] pt-3 rounded">
                        <h3 class="text-black text-lg text-2xl inter black py-8 lg:pt-0">Can't wait to get in touch with you!</h3>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="hidden uppercase  text-gray-700 text-xs font-bold mb-2">
                                        Name
                                    </label>
                                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white relative z-50"  type="text" placeholder="Name">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="hidden uppercase  text-gray-700 text-xs font-bold mb-2">
                                        Position / Job Title
                                    </label>
                                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 relative z-50"  type="text" placeholder="Position / Job Title">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="hidden uppercase  text-gray-700 text-xs font-bold mb-2" >
                                        Contact Number
                                    </label>
                                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white relative z-50"  type="text" placeholder="Contact Number">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="hidden uppercase  text-gray-700 text-xs font-bold mb-2">
                                        Email Address
                                    </label>
                                    <input class=" block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 relative z-50"  type="text" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="hidden uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Company
                                    </label>
                                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white relative z-50"  type="text" placeholder="Company">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="hidden uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                        Industry
                                    </label>
                                    <input class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 relative z-50"  type="text" placeholder="Industry">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3 mb-6 md:mb-0">
                                    <label class="block text-black text-lg mb-2 " >
                                        Tell us how we can help
                                    </label>
                                    <textarea  rows="4" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 relative z-50" placeholder="Type here"></textarea>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 my-6">
                                <div class="w-full px-3 mb-6 md:mb-0 text-center">
                                    <button type="button" class="bg-red-600 hover:bg-red-700 dark:hover:bg-red-500 text-white font-bold py-3 px-20 rounded-full shadow-none shadow-[var(--darkgray)] left-0 right-0 ml-auto mr-auto ">
                                        Send
                                    </button>
                                </div>
                            </div>
                    </div>
                    <div class="m-0 h-full">
                        <h2 class="text-white inter-bold text-4xl P-5 black text-center left-0 right-0 ml-auto mr-auto align-middle w-full lg:w-8/12 drop-shadow-[0_2px_2px_rgba(255,255,255,0.9)]">"If you work just for money, you'll never make it, but if you love what you're doing and you always put the customer first, success will be yours." – Ray Kroc, Founder McDonald's</h2>
                    </div>
                </div>
        </main>
  </body>
</html>
