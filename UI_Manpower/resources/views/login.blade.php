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
      <div>
        <a href="/homepage" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
      </div>
      <div class="hidden md:block">
        <ul class="flex space-x-4">
          <li><a href="/homepage" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">Home</a></li>
          <li><a href="/aboutUs" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">About Us</a></li>
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
          <li><a href="aboutUs" class="text-black block py-2 px-4 rounded hover:bg-red-800 hover:text-white">About Us</a></li>
          <li><a href="/jobs" class="text-black hover:text-red-800">Jobs</a></li>
          <li><a href="/Contactus" class="text-black hover:text-red-800">Contact Us</a></li>
          <li><a href="/applyNow" class="text-black hover:text-red-800">Apply Now</a></li>
          <li><a href="/login" class="text-black hover:text-red-800">Login</a></li>
      </ul>
    </div>
  </nav>

  <div class="min-h-screen flex items-center justify-center"style="background-image: url('images/draft background.jpg');">
    <div class=" p-8 bg-white rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-2 text-center flex justify-center">
            <a href="#" class="h-15">
                <img src="{{url('images/crewnnect1.png')}}" alt="">
            </a>
        </h2>
        <form>

  


        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                  @foreach($errors->all() as $error)
                    <div class="alert alert-danger"> {{$error}} </div>
                  @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger"> {{session('error')}} </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success"> {{session('success')}} </div>
            @endif
        </div>

        <form action="{{route('login.post')}}" method="POST">
            @csrf
            <!--Username-->
            <div class="mb-4 relative ">
                <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                <div class="absolute mt-5 inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <img src="https://www.svgrepo.com/show/522690/user.svg" alt="User SVG File" width="20" height="20">
                </div>
                <input type="text" id="name" name="name"
                    class="pl-10 pr-3 py-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Username" required>
            </div>
        

            <!--Password-->
            <div class="mb-4 relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="absolute mt-5 inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <img  src="https://www.svgrepo.com/show/518125/nc-passwords.svg" alt="Nc Passwords SVG File"  width="20" height="20">
                </div>
                <input type="password" id="password" name="password"
                    class="pl-10 pr-3 py-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Password" required>
                    
            </div>


            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Remember Me</label>
                </div>
                <div>
                    <a href="/Data_Management" class="text-sm text-indigo-600 hover:underline">Forgot your password?</a>
                </div>
            </div>
            <button type="submit"
                class="w-full bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Login
            </button>
        </form>
    </div>
</div>

</body>
</html>
    