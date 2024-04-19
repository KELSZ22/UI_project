<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Account Registration</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="bg-gray-100">

    <nav class="bg-gray-300 p-4">
        <div class="container mx-auto flex justify-between items-center">

            <div>
                <a href="#" class="h-40 py-5"> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Client Account Registration</h1>
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="px-6 py-4">

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

                <form action="{{route('clientregistration.post')}}" method="POST">
                    @csrf
                    <div id="notification" class="p-4 rounded-lg shadow-md bg-green-500 text-white text-center py-2 hidden">
                        Your registration has been successfully submitted!
                    </div>

                    

                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                        <input type="text" id="username" name="username"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>


                    <div class="mb-4">
                        <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2">Lastname:</label>
                        <input type="text" id="lastname" name="lastname"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>


                    <div class="mb-4">
                        <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2">Firstname:</label>
                        <input type="text" id="firstname" name="firstname"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>


                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>


                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                        <input type="password" id="password" name="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>


                    <div class="mb-4">
                        <p class="text-gray-700 text-sm font-bold mb-2">Field of works they need:</p>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist1" name="checklist1" class="mt-1 mr-2">
                            <label for="checklist1" class="text-gray-700">Construction</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist2" name="checklist2" class="mt-1 mr-2">
                            <label for="checklist2" class="text-gray-700">Education</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist3" name="checklist3" class="mt-1 mr-2">
                            <label for="checklist3" class="text-gray-700">Hospitality</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist4" name="checklist4" class="mt-1 mr-2">
                            <label for="checklist4" class="text-gray-700">Information Technology</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist5" name="checklist5" class="mt-1 mr-2">
                            <label for="checklist5" class="text-gray-700">Manufacturing</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist6" name="checklist6" class="mt-1 mr-2">
                            <label for="checklist6" class="text-gray-700">Medical and Healthcare</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist7" name="checklist7" class="mt-1 mr-2">
                            <label for="checklist7" class="text-gray-700">Personal Beauty and Wellness</label>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="checklist8" name="checklist8" class="mt-1 mr-2">
                            <label for="checklist8" class="text-gray-700">Manufacturing</label>
                        </div>
                        
                        <!-- Checkbox options -->
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            if (password !== confirm_password) {
                document.getElementById("passwordError").classList.remove("hidden");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
