<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="relative h-screen w-full">
        <!-- Background -->
        <div class="absolute inset-0 overflow-hidden -z-10">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay loop muted playsinline>
                <source src="/video/video.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Navbar -->
        <nav class="fixed bg-gray-800 bg-opacity-80 z-10 w-full">
            <div class="max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-start"> <!-- justify-start untuk menempel ke kiri -->
                    <div class="flex items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo">
                    </div>
                    <div class="hidden sm:block ml-4"> <!-- Tambahkan margin kiri agar tidak terlalu menempel -->
                        <div class="flex space-x-4">
                            <a href="#" class="text-white px-3 py-2 rounded-md text-sm font-medium bg-gray-900">Dashboard</a>
                            <a href="#" class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Home</a>
                            <a href="#" class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Projects</a>
                            <a href="#" class="text-gray-300 px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        


        <div class="absolute inset-0 flex flex-col items-center justify-end text-white text-center font-serif drop-shadow-lg mb-[13rem]">
            <h1 class="text-xl md:text-3xl drop-shadow-[2px_2px_4px_black]">Hello!</h1>
            <h1 class="text-4xl md:text-6xl font-bold drop-shadow-[2px_2px_4px_black]">Welcome to My Landing Page</h1>
        </div>
    </section>


    <section class="w-full py-24 bg-white">
        <div class="grid grid-cols-2 justify-center items-center    ">
            <div class="max-w-4xl mx-auto text-center grid ">
                <h2 class="text-3xl font-bold text-gray-900 text-left">ZHOU GUANYU AND <p>ANTONIO GIOVINAZZI ARE</p><p> RESERVE DRIVES FOR</p> SCUDERIA FERRARI HP</h2>
                <h5 class="mt-4 text-gray-600 text-left">The Chinese driver returns to <p>Maranello having previously spent four</p><p> seasons with the Scuderia Ferrari</p> <p>Driver Academy. The Italian is</p> reconfirmed in the role</h5>
            </div>
            <div>
                <img src="" alt="">
            </div>
        </div>
    </section>
</body>
</html>
