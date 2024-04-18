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
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Client Account Registration</h1>
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="px-6 py-4">
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="company_name" class="block text-gray-700 text-sm font-bold mb-2">Company Name (Optional):</label>
                        <input type="text" id="company_name" name="company_name"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-6">
                        <label for="confirm_password"
                            class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password"
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
                        <!-- Add more checklist items as needed -->
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
</body>

</html>
