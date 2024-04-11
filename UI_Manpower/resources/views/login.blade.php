<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <nav class="bg-gray-300 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div>
        <a href="#" class="text-black font-bold text-xl">CREWNNECT</a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="/homepage" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="/Contactus" class="text-black hover:text-red-300">Contact Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Apply Now</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Login</a></li>
          <li><button id="theme-toggle-m" type="button" class="clThemeToggle flex-0 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1">
                    <svg id="theme-toggle-dark-icon" class="clThemeToggleDarkIcon w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="clThemeToggleLightIcon hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button><li>
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
          <li><a href="/homepage" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Contact Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Apply Now</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="h-screen bg-red-900 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                <div class="p-4 bg-gray-100x rounded-full borderx border-gray-200x hidden md:block">
                    <a href="/homepage"
                         class="w-20alba fill-current text-black font-style:cambria font-bold text-6xl h-20 fill-current">CREWNNECT</a>
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-500 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                  
    
     
        <div>
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="email">
     Email address
</label>
            <input class="block rounded-t-lg rounded-r-lg rounded-b-lg rounded-l-lg border border-black mt-1 py-2 pl-1 w-full" id="email" type="email" name="email" required="required" autofocus="autofocus">
                    </div>

      
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="password">
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
            
            <button type="button" class="inline-flex items-center px-4 py-2 ring-red-300 bg-red-600 dark:bg-red-800 border border-transparent rounded-md font-semibold text-xs text-red-200 dark:text-red-200 uppercase tracking-widest hover:bg-red-700 dark:hover:bg-red-500  ml-3">
    Log in
</button>        </div>
</body>
</html>
    