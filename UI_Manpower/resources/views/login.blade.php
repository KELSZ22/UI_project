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

  <div class="h-screen bg-gray-200 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                <div class="p-4 bg-gray-100x rounded-full borderx border-gray-200x hidden md:block">
                    <a href="/homepage">
                    <img src="{{url('images/crewnnect1.png')}}" class="w-20alba fill-current text-black font-style:cambria font-bold text-6xl h-20 fill-current"></a>
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-300 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                  
    
     
        <div>
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" >
     Email address
</label>
            <input class="block rounded-t-lg rounded-r-lg rounded-b-lg rounded-l-lg border border-black mt-1 py-2 pl-1 w-full"  name="email" required="required" autofocus="autofocus">
                    </div>

      
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
    Password
</label>

            <input class="block rounded-t-lg rounded-r-lg rounded-b-lg rounded-l-lg border border-black mt-1 py-2 pl-1 w-full"  type="password" required="required">

                    </div>

        
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-black dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-700 dark:text-gray-400">Remember me</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-red-900 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="#">
                    Forgot your password?
                </a>
            
            <button type="button" class="inline-flex items-center px-4 py-2 ring-red-300 bg-red-600 dark:bg-red-800 border border-transparent rounded-md font-semibold text-xs text-red-200 dark:text-red-200 uppercase tracking-widest hover:bg-red-700 dark:hover:bg-red-500  ml-3" href="/Data_Management">
    Log in
</button>        </div>
</body>
</html>
    