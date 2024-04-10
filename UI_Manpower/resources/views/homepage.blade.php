<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navigation Bar</title>
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
          <li><a href="#" class="text-black hover:text-red-300">Home</a></li>
          <li><a href="#" class="text-black hover:text-red-300">About Us</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Jobs</a></li>
          <li><a href="#" class="text-black hover:text-red-300">Contact Us</a></li>
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
    <img class="w-full h-auto object-cover object-center" src="{{url('images/homepage.png')}}" alt="Cover image">
    <div class="absolute inset-0 flex items-center">
      <div class="ml-8 text-left text-white sm:ml-0 sm:text-center"> 
        <h1 class="text-4xl pl-28 sm:text-7xl text-black font-bold mb-2 sm:mb-4 ">CREWNNECT</h1> 
        <h1 class="text-4xl pl-28 sm:text-7xl text-black font-bold mb-2 sm:mb-4 ">MANPOWER</h1> 

        <p class="text-base sm:text-lg">Discover amazing things here.</p> 
      </div>
    </div>
  </div>
</div>




michael


  
</body>
</html>
