<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom list styles */
        .custom-list {
            list-style: none;
            padding-left: 1.5rem;
        }

        .custom-list li {
            position: relative;
            padding-left: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .custom-list li::before {
            content: "\f096"; /* Square icon */
            font-family: 'Font Awesome 5 Free';
            position: absolute;
            left: 0;
            top: 0.2rem;
            color: #6B7280; /* Gray color */
        }

        /* For checked items */
        .custom-list li.checked::before {
            content: "\f058"; /* Check-square icon */
            color: #10B981; /* Green color */
        }

        /* For unchecked items */
        .custom-list li.unchecked::before {
            content: "\f096"; /* Square icon */
            color: #EF4444; /* Red color */
        }


    </style>
</head>
<body class="bg-gray-100">

<!-- Navigation bar -->
<nav class="bg-gray-300 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/homepage" class=" "> <img src="{{url('images/crewnnect1.png')}}" alt=""></a>
        
        <div class="flex text-2xl font-semibold text-center text-black">Client Dashboard</div>
        <div class="flex justify-items-end">
            
            <!-- Profile Picture -->
            <div class="h-12 w-12 rounded-full overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Profile Picture">
            </div>
            <!-- Name and Email of Applicant -->
            <div class="ml-4 text-black">
                <p class="text-m font-semibold">John Doe</p>
                <p class="text-xs text-gray-600">john@example.com</p>
            </div>
        </div>
        
    </div>
</nav>

<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto justify-center items-center hidden md:block">
        <div class="container flex flex-wrap bg-clip-content p-6 border-4 mx-auto">
            <ul class="flex flex-wrap space-x-3 items-center justify-center mx-auto">
                <li class="ml-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content1"> 
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/VQX2hLK/1.png" alt="Status Icon">Status</a></li> 
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content2"> 
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/K7V8tg3/2.png" alt="Pre:Approval Icon">Employee Candidates</a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content3">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/RBP6WP9/3.png" alt="Icon">Enlisted for Employment </a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content4">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/mBDFWzs/4.png" alt="Hospital Icon">Employee(s)</a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content5">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/Z1Mk5cj/5.png" alt="Icon">Pre:Approval</a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content6">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/9TV66bB/6.png" alt="Hospital Icon">Client Accreditation</a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content7">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/YZbkvz8/8.png" alt="Hospital Icon">Contracts Documents</a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content9">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/wBZg5GT/9.png" alt="Hospital Icon">Attached Documents      .</a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content10">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/34xcnPB/10.png" alt="Hospital Icon">Media Files</a></li>
                <li class="mr-0 border-r-2"><a href="#" class="flex items-center py-2 px-4 mr-3 hover:text-blue-800 nav-link" data-target="content11">
                    <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/Lgm8Ttx/11.png" alt="Hospital Icon">Signed Form</a></li>
            </ul>
        </div>
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
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content1">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/VQX2hLK/1.png" alt="Status Icon">
                Status</a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content2">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/K7V8tg3/2.png" alt="Pre:Approval Icon">
                Employee Candidates</a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content3">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/RBP6WP9/3.png" alt="Icon">
                Enlisted for Employment </a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content4">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/mBDFWzs/4.png" alt="Hospital Icon">
                Employee(s)</a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content5">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/Z1Mk5cj/5.png" alt="Icon">
                Pre:Approval</a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content6">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/9TV66bB/6.png" alt="Hospital Icon">
                Client Accreditation</a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content7">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/YZbkvz8/8.png" alt="Hospital Icon">
                Contracts Documents</a></li>
            
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content9">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/wBZg5GT/9.png" alt="Hospital Icon">
                Attached Documents</a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content10">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/34xcnPB/10.png" alt="Hospital Icon">
                Media Files</a></li>
            <li><a href="#" class="hover:text-gray-300 nav-link" data-target="content11">
            <img class="h-8 inline-block items-center justify-center mr-3" src="https://i.ibb.co/Lgm8Ttx/11.png" alt="Hospital Icon">
                Signed Form</a></li>
        </ul>
    </div>
</nav>

<!-- Main content area -->
<div class="container mx-auto p-10">
    <div class="gap-4">
        <!-- Content sections -->
        <div id="content1" class="bg-white p-4 rounded-lg shadow-md content">
            <h2 class="text-3xl font-semibold mb-4 text-center">Status</h2>
            <div id="statusDateTime" class="text-xl"></div> <!-- Placeholder for displaying date and time -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <ul class="custom-list mt-8">
                    <li class="checked">Pre:Approval</li>
                </ul>
                <ul class="custom-list mt-8">
                    <li class="checked">Onlines Application Form</li>
                    <li class="unchecked">Required File Attachments</li>
                    <li class="unchecked">Employer's Various Contracts</li>
                    <li class="unchecked">Employer's Photos and Videos requirements</li>
                </ul>
            </div>
        </div>
        <div id="content2" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Pre:Approval</h2>
            <p>View and update your profile information here.</p>
        </div>
        <div id="content3" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Employment Req</h2>
            <p>Adjust your account settings as needed.</p>
        </div>
        <div id="content4" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Pre:Deployement</h2>
            <p>View your messages here.</p>
        </div>
        <div id="content5" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Abroad Arrival</h2>
            <p>Manage your notifications preferences.</p>
        </div>
        <div id="content6" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Employer Confirmation</h2>
            <p>View detailed analytics of your activity.</p>
        </div>
        <div id="content7" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Pre:Balikbayan Checks</h2>
            <p>Generate and view reports here.</p>
        </div>
        <div id="content8" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Balikbayan</h2>
            <p>Below are the documents currently attached:</p>
            
            
        </div>
        <!-- Attached Documents -->
        <div id="content9" class="bg-white p-4 rounded shadow-md hidden content">
            <div class=" container mx-auto  px-10">
                <p>Below are the documents currently attached:</p>
                <ul class="list-disc pl-6 mt-4">
                    <li>Passport Photo</li>
                    <li>NBI Clearance</li>
                    <li>SSS ID</li>
                    <li>UMID ID</li>
                    <li>National ID</li>
                    <li>Residence Bill With Address</li>
                </ul>
                <hr class="my-4">
                <h3 class="text-lg font-semibold mb-2">Passport Photo</h3>
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="file1" id="file1" class="mb-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
                <h3 class="text-lg font-semibold mb-2">NBI Clearance</h3>
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="file2" id="file2" class="mb-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
                <h3 class="text-lg font-semibold mb-2">SSS ID</h3>
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="file3" id="file3" class="mb-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
                <h3 class="text-lg font-semibold mb-2">UMID ID</h3>
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="file4" id="file4" class="mb-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
                <h3 class="text-lg font-semibold mb-2">National ID</h3>
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="file5" id="file5" class="mb-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
                <h3 class="text-lg font-semibold mb-2">Residence Bill With Address</h3>
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="file" name="file6" id="file6" class="mb-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                </form>
            </div>
            
        </div>
        <div id="content10" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Media Files</h2>
            <p>Below are the documents currently attached:</p>
           
        </div>
        <div id="content11" class="bg-white p-4 rounded shadow-md hidden content">
            <h2 class="text-lg font-semibold mb-4">Signed Form</h2>
            <p>Click here to logout from your account.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="fixed bottom-0 w-full bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Crewnect. All rights reserved.</p>
    </div>
</footer>

<script>
    // JavaScript to toggle visibility of content based on selected navigation
    document.getElementById('menu-toggle').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
    
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);
            const allContent = document.querySelectorAll('.content');

            // Hide all content sections
            allContent.forEach(content => {
                content.classList.add('hidden');
            });

            // Show the selected content
            targetContent.classList.remove('hidden');
        });
    });

    // Function to update the Status content with current date and time
    function updateStatusDateTime() {
        const statusDateTimeElement = document.getElementById('statusDateTime');
        const now = new Date();
        const dateTimeString = now.toLocaleString(); // Format date and time
        statusDateTimeElement.textContent = `Overview as of ${dateTimeString}`;
    }
    updateStatusDateTime();
</script>
</body>
</html>
