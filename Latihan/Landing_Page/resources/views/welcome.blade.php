<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Landing Page</title>
    <link rel="stylesheet" href="">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="relative h-screen w-full">
        <!-- Background -->
        <div class="absolute inset-0 overflow-hidden -z-1">
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
    

        <div class="absolute inset-0 flex flex-col items-center justify-end text-white text-center font-serif drop-shadow-lg mb-[8.5rem]">
            <h1 class="text-lg md:text-lg drop-shadow-[2px_2px_4px_black] mb-6">SPORTS CARS</h1>
            <h1 class="text-4xl md:text-6xl font-bold drop-shadow-[2px_2px_4px_black]">START YOUR ENGINE</h1>
            <h3 class="text-lg drop-shadow-[2px_2px_4px_black] mt-6">DISCOVER THE FERARRI LINE UP</h3>
        </div>
    </section>


    <section class="w-full py-[3rem] bg-white">
        {{-- bagian1 --}}
        <div class="grid grid-cols-2 justify-center items-center gap-4">
            <div class="max-w-4xl mx-auto text-left flex items-center gap-4 pl-20">
                <!-- Ikon Panah -->
                <svg class="w-6 h-6 text-gray-800 dark:text-white self-center" 
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                    fill="none" viewBox="0 0 8 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
                </svg>
        
                <!-- Konten Teks -->
                <div class="ml-8">
                    <h2 class="text-4xl font-bold text-gray-900 font-serif">
                        ZHOU GUANYU AND <p>ANTONIO GIOVINAZZI ARE</p><p>RESERVE DRIVERS FOR</p> SCUDERIA FERRARI HP
                    </h2>
                    <h5 class="mt-8 text-gray-600 text-xl font-sans">
                        The Chinese driver returns to <p>Maranello having previously spent four</p>
                        <p>seasons with the Scuderia Ferrari</p> 
                        <p>Driver Academy. The Italian is</p> reconfirmed in the role
                    </h5>
                    <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-3">
                        <a href="#">Read More</a>
                    </button>
                </div>
            </div>

                {{-- image --}}
            <div class="relative flex items-center ml-10">
                <img src="https://cdn.ferrari.com/cms/network/media/img/resize/67a335db0ddc620010462842-giovinazz-zhou_16-9-gtw2?" alt="" class="w-[600px] h-[720] mt-5">
                <a href="#" class="flex justify-between ml-12">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                    </svg>
                </a>
            </div>

                
            </div>
        </div>
    </section>


    <section class= "pt-[3rem] bg-white">
        <div class="grid grid-cols-2 ">
            <div class="relative overflow-hidden group"> 
                <div class="">
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[14.5rem] z-10">
                        Collections
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-7xl text-white text-center font-serif drop-shadow-lg mb-[9rem] z-10">
                        New Arrivals
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-2xl text-white text-center font-mono drop-shadow-lg mb-[2.5rem] z-10">
                        Disover
                    </h1>
                    <a href="" class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[2.7rem] ml-[10rem] z-10">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
                    </a>
                </div>
                <div class="group-hover:scale-110">
                    <img loading="lazy" 
                        src="https://cdn.ferrari.com/cms/network/media/img/resize/67a0cd03532bc10011a520c1-ferrari_ss25-update-gateway-feb-desk-v2?" 
                        alt="Ferrari Collection" 
                        class="object-cover">
                </div>
            </div>
            <div class="relative overflow-hidden group">
                <div>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[15rem] z-10">
                        Magazine
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-5xl text-white text-center font-serif drop-shadow-lg mb-[9rem] z-10">
                        THE KC23: UNIQUELY <p>SPECIAL</p>
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-2xl text-white text-center font-mono drop-shadow-lg mb-[2.5rem] z-10">
                        Disover
                    </h1>
                    <a href="" class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[2.7rem] ml-[10rem] z-10">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
                    </a>
                </div>
                <div class="group-hover:scale-110">
                    <img loading="lazy" src="https://cdn.ferrari.com/cms/network/media/img/resize/67850164f148170011190279-ferrari-kc23-magazine-box-2025-gate-desk-2?" alt="" class="object-cover">
                </div>
            </div>
            <div class="relative overflow-hidden group">
                <div>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[13rem] z-10">
                        Sports Cars
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-5xl text-white text-center font-serif drop-shadow-lg mb-[10rem] z-10">
                        FERARRI F80
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-2xl text-white text-center font-mono drop-shadow-lg mb-[2.5rem] z-10">
                        Disover
                    </h1>
                    <a href="" class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[2.7rem] ml-[10rem] z-10">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
                    </a>
                </div>
                <div class="group-hover:scale-110">
                    <img loading="lazy" src="https://cdn.ferrari.com/cms/network/media/img/resize/6729ee6bb6f3320011b982d9-ferrari-f80-box-gate-nov-24-desk?" alt="" class="object-cover">
                </div>
                
            </div>
            <div class="relative overflow-hidden group">
                <div>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[12rem] z-10">
                        Ferrari Museums
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-5xl text-white text-center font-serif drop-shadow-lg mb-[9rem] z-10">
                        ONE OF A KING
                    </h1>
                    <h1 class="absolute inset-0 flex flex-col items-center justify-end text-2xl text-white text-center font-mono drop-shadow-lg mb-[2.5rem] z-10">
                        Disover
                    </h1>
                    <a href="" class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[2.7rem] ml-[10rem] z-10">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
                    </a>
                </div>
                <div>
                    <img loading="lazy" src="https://cdn.ferrari.com/cms/network/media/img/resize/65d4ad580eb72b0022e65549-ferrari-one-of-a-kind-gate-box-desk?" alt="" class="object-cover group-hover:scale-110">
                </div>
                
            </div>
            <div class="relative overflow-hidden group">
                <h1 class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[12rem] z-10">
                    Ferrari Approved
                </h1>
                <h1 class="absolute inset-0 flex flex-col items-center justify-end text-5xl text-white text-center font-serif font-bold drop-shadow-lg mb-[9rem] z-10">
                    PRE-OWNED
                </h1>
                <h1 class="absolute inset-0 flex flex-col items-center justify-end text-2xl text-white text-center font-mono drop-shadow-lg mb-[2.5rem] z-10">
                    Disover
                </h1>
                <a href="" class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[2.7rem] ml-[10rem] z-10">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                    </svg>
                </a>
                <img loading="lazy" src="https://cdn.ferrari.com/cms/network/media/img/resize/65e085b11804e5015f6628a1-ferrari-auto-pre-owned-immagine-land?" alt="" class="w-full h-screen object-cover group-hover:scale-110">
            </div>
            <div class="relative overflow-hidden group">
                <h1 class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[12rem] z-10">
                    Sports Cars
                </h1>
                <h1 class="absolute inset-0 flex flex-col items-center justify-end text-5xl text-white text-center font-serif font-bold drop-shadow-lg mb-[9rem] z-10">
                    PAST MODELS
                </h1>
                <h1 class="absolute inset-0 flex flex-col items-center justify-end text-2xl text-white text-center font-mono drop-shadow-lg mb-[2.5rem] z-10">
                    Disover
                </h1>
                <a href="" class="absolute inset-0 flex flex-col items-center justify-end text-3xl text-white text-center font-serif drop-shadow-lg mb-[2.7rem] ml-[10rem] z-10">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                    </svg>
                </a>
                <img loading="lazy" src="https://cdn.ferrari.com/cms/network/media/img/resize/66e14a6cd362ab0010cf35b8-ferrari-past-models-f40-box-gate-09-11-24-desk?" alt="" class="w-full h-screen object-cover group-hover:scale-110">
            </div>
        </div>
    </section>

    
    <section class="bg-zinc-800 h-[21rem] w-full flex justify-center items-center">
        <div class="text-center text-white mb-[2.5rem]">
            <h1 class="text-xl font-serif font-extrabold">Newsletter</h1>
            <h1 class="text-md font-serif font-semibold pt-4">Stay up to date with the latest news from the world of Ferrari.</h1>
            <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium text-sm px-[7rem] py-5 me-2 mt-8 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900 font-samss">SUBSCRIBE</button>
        </div>
    </section>


    <section>
        <footer class="bg-zinc-900 text-center">
            <div class="mx-auto w-full max-w-screen-xl">
                <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-5">
                    <div class="mt-8">
                        <h2 class="mb-6 text-sm font-semibold text-white">RACING</h2>
                        <ul class="text-white font-medium text-xs mt-8">
                            <li class="mb-6">
                                <a href="#">Scuderia Ferrari HP</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Lewis Hamilton</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Charles Leclerc</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Hypercar</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">GT Series</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Esports</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Scuderia Ferrari Driver <p>Academy</p></a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Scuderia Ferrari Member</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h2 class="mb-6 text-sm font-semibold text-white">SPORTS CARS</h2>
                        <ul class="text-white font-medium text-xs mt-8">
                            <li class="mb-6">
                                <a href="#">Range</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Configure your Ferrari</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">MyFerarri</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Pre-Owned</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Dealers</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Recall Information</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">TechInfo</p></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h2 class="mb-6 text-sm font-semibold text-white">COLLECTIONS</h2>
                        <ul class="text-white font-medium text-xs mt-8">
                            <li class="mb-6">
                                <a href="#">Men</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Women</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Kids</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Shoes</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Eyewear</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Collectibles</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Scuderia Ferarri Selection</p></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h2 class="mb-6 text-sm font-semibold text-white">EXPERIENCES</h2>
                        <ul class="text-white font-medium text-xs mt-8">
                            <li class="mb-6">
                                <a href="#">Corse Clienti</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Ferrari Esports Series</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Ristorante Cavallino</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Ferarri Museums</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Ferarri World Abu Dhabi</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Ferarri Land Barcelona</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-8">
                        <h2 class="mb-6 text-sm font-semibold text-white">ABOUT US</h2>
                        <ul class="text-white font-medium text-xs mt-8">
                            <li class="mb-6">
                                <a href="#">Corporante</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Sustainability</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Media Centre</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">News</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Magazine</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">History</a>
                            </li>
                            <li class="mb-6">
                                <a href="#">Join us</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="border-gray-700 h-[1px]">
                

                <div class="grid grid-cols-2 gap-6 py-6 lg:py-8 md:grid-cols-4">
                    <div class="px-8">
                        <a href="#" class="flex items-center space-x-2 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook text-white" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                            <span>FACEBOOK</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center space-x-2 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                </svg>
                            <span>Instagram</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center space-x-2 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                </svg>
                            <span>LINKEDIN</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center space-x-2 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                </svg>
                            <span>TIK TOK</span>
                        </a>
                    </div>
                    <div class="px-8">
                        <a href="#" class="flex items-center space-x-2 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                                <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142z"/>
                                <path d="M11.857 3.143h-1.143V6.57h1.143zm-3.143 0H7.571V6.57h1.143z"/>
                                </svg>
                            <span>TWITCH</span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center space-x-2 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                </svg>
                            <span>x</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="flex items-center space-x-2 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                </svg>
                            <span>YOUTUBE</span>
                        </a>
                    </div>
                </div>

                <hr class="border-gray-700 h-[1px]">

                <div class="text-center text-zinc-700 text-[0.55rem] font-bold relative justify-center items-start">
                    <div class="py-8">
                        <p>
                            Ferrari N.V.- Holding company - A company under Ducth law, having its officiwl seat in Amsterdam, the Netherlands and its corporate
                        </p>
                        <p>address at Via Abetone inferiore No.4,1-41053 Maranello (MO), Italy, registered with the Ducth trade register under number 64060977</p>
                        <br>
                        <p>
                            Ferrari S.p.A. - A company under Italian law, having its registered office at Via Emilia Est No. 1163, Modena, Italy, Companies' Register of
                        </p>
                        <p>
                            Modena, VAT and Tax number 00159560366 and share capital of Euro 20,260,000
                        </p>
                        <br>
                        <p>Copyright 2025-All rights reserved</p>
                    </div>
                </div>
            </div>
            <div class="bg-zinc-800">
                <div class="mx-auto container">
                    <div class="py-8 grid grid-cols-7 items-start ">
                        <div class="flex flex-wrap justify-start items-center flex-col-8 gap-8 col-span-6 text-lg text-white">
                            <a href="#">Legal</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Cookie Policy</a>
                            <a href="#">Accessibility</a>
                            <a href="#">Submit your privacy request</a>
                            <a href="#">Contacts</a>
                            <a href="#">Corporate ENG</a>
                            <a href="#">Corporate ITA</a>
                            <a href="#">Responsible Disclosure</a>
                            <a href="#">Reward Anticounterfeiting</a>
                            <a href="#">Media Centre</a>
                        </div>
                        <div class="col-span-1 pt-1 text-white font-bold font-serif flex justify-end">
                            <a href="#">
                                INDONESIA
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-up inline-flex -mt-1 ml-3" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894z"/>
                                  </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    
    


 

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>