<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Portfolio </title>
</head>
<body>
    <nav class="fixed top-0 left-1/2 transform -translate-x-1/2 z-10 bg-red-600 w-[97%] max-w-7xl py-2 border-2 border-black shadow-[6px_6px_0px_black]">
        <div class="mx-auto px-2">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center">
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex shrink-0 items-center pl-6">
                <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              </div>
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4 ml-[43.5rem]">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-white hover:bg-gray-700 hover:text-white" -->
                  <a href="#home" class="rounded-md px-3 py-5 text-lg font-medium text-white hover:-translate-y-2 transition-all duration-300">Home</a>
                  <a href="#about" class="rounded-md px-3 py-5 text-lg font-medium text-white hover:-translate-y-2 transition-all duration-300">About</a>
                  <a href="#projects" class="rounded-md px-3 py-5 text-lg font-medium text-white hover:-translate-y-2 transition-all duration-300">Projects</a>
                  <a href="#contact" class="rounded-md px-3 py-5 text-lg font-medium text-white hover:-translate-y-2 transition-all duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>
      
    <section id="home" class="py-20 mt-4">
        <div class="grid grid-cols-2 gap-16">
            <div class="flex justify-end items-center">
                <div class="pr-8">
                    <h1 class="text-5xl font-bold">Hello, I'm Alfa Rizki</h1>
                    <p class="text-2xl py-8">I am a student who is learning programming, <br>delving into logic, algorithms, and <br>application development. Despite the challenges, <br>I am still excited to continue honing my skills and <br>becoming a reliable programmer.</p>
                    <a href="#about"><button class="bg-cyan-300 border-black shadow-[6px_6px_0px_black] text-black font-bold py-3 px-5 rounded hover:shadow-none hover:border-2">About Me</button></a>
                </div>
            </div>
            <div class="ml-10">
                <img src="/img/Alfa.jpg" alt="Alfa Rizki" class="w-[25rem] h-[25rem] rounded-full object-cover">
            </div>
        </div>
    </section>

    <section id="about" class="py-[9rem]">
        <div class="flex justify-center items-center hover:scale-125 transition-all duration-500">
            <div class="bg-orange-200 border-[0.5rem] border-black rounded-xl w-[70%]">
                <div class="grid grid-cols-2 gap-16">
                    <div class="flex justify-end items-center pr-8">
                        <img src="{{ asset($portfolio['image']) }}" alt="Alfa Rizki" class="w-[20rem] h-[20rem] rounded-full object-cover">
                    </div>
                    <div class="flex justify-start items-center">
                        <div class="pr-8">
                            <h1 class="text-5xl font-bold">About Me</h1>
                            <p class="text-2xl py-8">{{ $portfolio['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="projects" class="py-4">
        <div class="mt-20">
            <p class="text-5xl font-semibold text-black text-center">Projects</p>
        </div>
            <div class="container mx-auto flex justify-center mt-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="max-w-sm bg-white rounded-lg border-2 border-black shadow-[8px_8px_0px_black] hover:scale-105 transition-all duration-200">
                        <img class="rounded-t-lg" src="img/Projects3.png" alt="">
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Landing Page Ferrari</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                I created a landing page with a design similar to a Ferrari website using Tailwind CSS and Laravel.
                            </p>
                            <div class="flex space-x-2 mt-16">
                                <p class="font-bold text-xs text-center bg-red-200 w-14 h-8 border-2 border-black flex justify-center items-center">Laravel</p>
                                <p class="font-bold text-xs text-center bg-red-200 w-20 h-8 border-2 border-black flex justify-center items-center">Tailwind Css</p>
                            </div>
                            <div class="flex space-x-4">                           
                                <a href="#" class="inline-flex items-center mt-3 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 border-2 border-black shadow-[4px_4px_0px_black] hover:-translate-y-1 transition-all duration-300">
                                    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Logo" class="w-[1rem] h-[1rem] mr-2"> Code
                                </a>
                                <a href="#" class="inline-flex items-center mt-3 px-3 py-2 text-sm font-semibold text-center text-black bg-lime-400 border-2 border-black shadow-[4px_4px_0px_black] hover:-translate-y-1 transition-all duration-300">
                                    <img src="https://static-00.iconduck.com/assets.00/box-arrow-in-up-right-icon-512x512-a6n5jq1e.png" alt="Logo" class="w-[1rem] h-[1rem] mr-2"> Live Demo
                                </a>
                            </div> 
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-lg border-2 border-black shadow-[8px_8px_0px_black] hover:scale-105 transition-all duration-200">
                        <img class="rounded-t-lg" src="img/Projects1.png" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Landing Page Gucci</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                I created a landing page with a design similar to a Gucci website using Tailwind CSS and Laravel.
                            </p>
                            <div class="flex space-x-2 mt-16">
                                <p class="font-bold text-xs text-center bg-red-200 w-14 h-8 border-2 border-black flex justify-center items-center">Laravel</p>
                                <p class="font-bold text-xs text-center bg-red-200 w-20 h-8 border-2 border-black flex justify-center items-center">Tailwind Css</p>
                            </div>
                            <div class="flex space-x-4">                           
                                <a href="#" class="inline-flex items-center mt-3 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 border-2 border-black shadow-[4px_4px_0px_black] hover:-translate-y-1 transition-all duration-300">
                                    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Logo" class="w-[1rem] h-[1rem] mr-2"> Code
                                </a>
                                <a href="#" class="inline-flex items-center mt-3 px-3 py-2 text-sm font-semibold text-center text-black bg-lime-400 border-2 border-black shadow-[4px_4px_0px_black] hover:-translate-y-1 transition-all duration-300">
                                    <img src="https://static-00.iconduck.com/assets.00/box-arrow-in-up-right-icon-512x512-a6n5jq1e.png" alt="Logo" class="w-[1rem] h-[1rem] mr-2"> Live Demo
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white rounded-lg border-2 border-black shadow-[8px_8px_0px_black] hover:scale-105 transition-all duration-200">
                        <img class="rounded-t-lg" src="img/Projects2.png" alt="" />
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add a dashboard view in a landing page</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                I added a dashboard page with different places that should have previously had to log in or register first.
                            </p>
                            <div class="flex space-x-2">
                                <p class="font-bold text-xs text-center bg-red-200 w-14 h-8 border-2 border-black flex justify-center items-center">Laravel</p>
                                <p class="font-bold text-xs text-center bg-red-200 w-20 h-8 border-2 border-black flex justify-center items-center">Tailwind Css</p>
                            </div>
                            <div class="flex space-x-4">                           
                                <a href="#" class="inline-flex items-center mt-3 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 border-2 border-black shadow-[4px_4px_0px_black] hover:-translate-y-1 transition-all duration-300">
                                    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Logo" class="w-[1rem] h-[1rem] mr-2"> Code
                                </a>
                                <a href="#" class="inline-flex items-center mt-3 px-3 py-2 text-sm font-semibold text-center text-black bg-lime-400 border-2 border-black shadow-[4px_4px_0px_black] hover:-translate-y-1 transition-all duration-300">
                                    <img src="https://static-00.iconduck.com/assets.00/box-arrow-in-up-right-icon-512x512-a6n5jq1e.png" alt="Logo" class="w-[1rem] h-[1rem] mr-2"> Live Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="contact" class="pt-[3rem] pb-4">
        <div class="flex justify-center items-center ">
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg w-[90%] h-[100%] border-2 border-black shadow-[8px_8px_0px_black]">
                <form class="mt-11 w-11/12 max-w-full space-y-4 pl-16" action="" method="post">
                    <div>
                        <p class="text-5xl font-semibold text-black text-center pb-12">CONTACT</p>
                    </div>
                        <div class="mx-auto">
                            <div class="flex flex-col-2 gap-52 -mx-2 ">
                                <div class="w-full md:w-1/2 px-2">
                                    <label class="peer-block text-black text-sm font-semibold mb-1" for="name">YOUR NAME</label>
                                    <input type="text" id="name" name="Name" placeholder="Your Name" class="w-full p-3 bg-white text-black rounded-md outline-none focus:ring-2 focus:ring-gray-200">
                                </div>
                                <div class="w-full md:w-1/2 px-2">
                                    <label class="block text-black text-sm font-semibold mb-1" for="phone">PHONE NUMBER</label>
                                    <input type="text" id="phone" name="Phone" placeholder="Phone Number" class="w-full p-3 bg-white text-black rounded-md outline-none focus:ring-2 focus:ring-gray-200">
                                </div>
                            </div>
                          </div>

                          <div>
                            <label class="block text-black text-sm font-semibold mb-1" for="email">EMAIL</label>
                            <input type="email" id="email" name="Email" placeholder="Email" class="w-full p-3 bg-white text-black rounded-md outline-none focus:ring-2 focus:ring-gray-200">
                          </div>
                      
                          <div>
                            <label class="block text-black text-sm font-semibold mb-1" for="message">YOUR MESSAGE</label>
                            <textarea id="message" name="Message" placeholder="Your Message" class="w-full p-3 bg-white text-black rounded-md h-32 outline-none focus:ring-2 focus:ring-gray-200"></textarea>
                          </div>

                          <div class="pb-6">
                            <button type="submit" name="submit" class="w-full p-3 bg-white text-black text-xl font-normal rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 hover:bg-gray-200">
                              SEND MESSAGE
                            </button>
                          </div>
                    </form>
                </div>
            </div>
    </section>
    
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>