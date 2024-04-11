<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOMEPAGE|CREWNNECT</title>
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
          <li><a href="#" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="/Contactus" class="text-black hover:text-red-300">Contact Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Apply Now</a></li>
          <li><a href="/login" class="text-black hover:text-red-300">Login</a></li>

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



<div class="mx-auto max-w-screen-xl">
  <div class="relative">
    <img class="w-full h-auto object-cover object-center shadow-lg" src="{{url('images/homepage.png')}}" alt="Cover image">
    <div class="absolute inset-0 flex items-center">
      <div class="ml-8 text-left text-white sm:ml-0 sm:text-center"> 
        <h1 class="text-4xl pl-28 sm:text-7xl text-black font-bold mb-2 sm:mb-4 ">CREWNNECT</h1> 
        <h1 class="text-4xl pl-28 sm:text-7xl text-black font-bold mb-2 sm:mb-4 ">MANPOWER</h1> 
        <div class="space-x-10 pl-24">
        <button class="bg-red-800 font-bold rounded-3xl hover:bg-blue-800 px-4 py-2">HIRE TALENTS</button>
        <button class="bg-blue-800 font-bold rounded-3xl hover:bg-red-800 px-8 py-2">FIND JOBS</button>

        </div>
      </div>
    </div>
  </div>


  <div class="bg-gray-100 p-6 rounded-lg shadow-md flex flex-col md:flex-row mt-20">
  <div class="md:w-1/3">
    <img src="https://uschamber-co.imgix.net/https%3A%2F%2Fs3.us-east-1.amazonaws.com%2Fco-assets%2Fassets%2Fimages%2Femployee-satisfaction.jpg?auto=compress%2Cformat&crop=focalpoint&fit=crop&fp-x=0.6696&fp-y=0.2932&h=415&q=88&w=622&s=407154855903dd6144a39dbf4a6ec0c3" alt="Company Logo" class="rounded-full mx-auto md:mx-0 md:mr-6 mb-4 md:mb-0">
  </div>
  <div class="md:w-2/3 ml-6">
    <h2 class="text-xl font-semibold mb-2">About Us</h2>
    <p class="mb-4">At CREWNNECT, we're dedicated to revolutionizing the way businesses connect with their manpower needs. With a commitment to excellence and innovation, we strive to be the premier destination for workforce solutions. Our team of industry experts is passionate about matching the right talent with the right opportunities, driving success for both businesses and individuals alike. By harnessing the power of technology and human insight, we deliver personalized, efficient, and reliable manpower services tailored to meet the unique demands of each client. With CREWNNECT, you can trust that your workforce needs are in capable hands. Join us in shaping the future of manpower management, one connection at a time.</p>

    <button class="ml-36 font-bold mt-16 text-xl bg-red-800 text-white px-6 py-2 rounded-3xl hover:bg-blue-800">Learn More</button>

  </div>
</div>




  <div class="flex justify-center bg-gray-100 mt-20">
    <div>
   <h1 class="mr-10 font-bold mt-16 text-xl" > JOB OPPORTUNITIES</h1>
    <button class="mr-10 font-bold mt-16 text-xl bg-red-800 text-white px-6 py-2 rounded-3xl hover:bg-blue-800">Find More Jobs</button>
    </div>
        <div class="max-w-4xl grid grid-cols-3 gap-8">

        <div class="max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-64" style="background-image: url('https://media.istockphoto.com/id/1326873289/photo/shot-of-two-builders-shaking-hands-at-a-construction-site.jpg?s=612x612&w=0&k=20&c=mA32SatnpxHOQ66Imi5Ifh3MVRF9kkU2k1VMjUZwdp0=')">

              </div>
                <div class="p-4">
                    <h2 class="font-bold text-xl mb-2 px-10">Sea Man</h2>
                </div>
            </div>

            <div class="max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-64" style="background-image: url('https://media.istockphoto.com/id/1326873289/photo/shot-of-two-builders-shaking-hands-at-a-construction-site.jpg?s=612x612&w=0&k=20&c=mA32SatnpxHOQ66Imi5Ifh3MVRF9kkU2k1VMjUZwdp0=')">
                </div>
                <div class="p-4">
                    <h2 class="font-bold text-xl mb-2 px-10">Architech</h2>
                </div>
            </div>

            <div class="max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-64" style="background-image: url('https://media.istockphoto.com/id/1326873289/photo/shot-of-two-builders-shaking-hands-at-a-construction-site.jpg?s=612x612&w=0&k=20&c=mA32SatnpxHOQ66Imi5Ifh3MVRF9kkU2k1VMjUZwdp0=')">
                </div>
                <div class="p-4">
                    <h2 class="font-bold text-xl mb-2 px-10">Civil Engineer</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="relative bg-cover bg-center h-80 flex items-center justify-center mt-20">
        <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
        <div class="relative z-10 text-white text-center mx-4">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">CREWNNECT MANPOWER</h1>
        <p class="text-lg md:text-xl lg:text-2xl">"Unlock the full potential of your team with CREWNNECT Manpower. Empower your crew to soar to new heights with our comprehensive manpower solutions. Whether you're seeking skilled professionals, seasoned experts, or enthusiastic newcomers, CREWNNECT has you covered. Our innovative approach to workforce management ensures seamless integration 
          and optimal performance, allowing your organization to thrive in today's dynamic landscape."</p>

          <div> <button class="text-white bg-red-800 px-10 py-2 rounded-3xl mt-10 font-bold hover:bg-blue-800"> Join Us </button></div>

        </div>

        <img src="{{url('images/joinus.png')}}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover z-0 blur-md" />
        </div>





    
  </div>


  


 

</div>



<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>


  
</body>
</html>
