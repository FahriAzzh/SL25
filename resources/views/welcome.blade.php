<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SL25</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/countdown.js'])
</head>
<body class="bg-ungu text-ungu overflow-x-hidden">
    <!-- Main Container -->
    <div class="relative w-full">
        <!-- Navigation -->
        @include('components.navbar')

        <!-- Home Section -->
        <div id="home" class="home flex flex-col w-full h-[70vw] items-center justify-center bg-cover bg-center" style="background-image: url({{ asset('images/bg-home.png') }});">
            <div class="flex items-center justify-center min-h-screen" id="home">
                <img src="images/headline.png" class="res w-[55vw] transform transition duration-500 hover:scale-105" alt="">
            </div>
        </div>

        <!-- COUNTDOWN SECTION -->
        <div class="home flex flex-col w-full h-[55vw] items-center justify-center bg-cover bg-center" style="background-image: url({{ asset('images/bg-ungu.png') }});">
            <img src="images/regis.svg" class="res w-[65%] -translate-y-[8vw] pb-0 md:pb-[3vw]" alt="">
                <div id="countdown" class="flex justify-center items-center font-superfeel text-[#E6C1FE] text-[4vw]">
                    <ul class="w-[80vw] grid grid-cols-7 items-center justify-items-center text-center -gap-x-6">
                        <li class="countdown flex flex-col"><span class="cntnum text-[8vw] font-bold" id="days">88</span><span class="text-[2vw]">days</span></li>
                        <li class="countdown"></li>
                        <li class="countdown flex flex-col"><span class="cntnum text-[8vw] font-bold" id="hours">6</span><span class="text-[2vw]">Hours</span></li>
                        <li class="countdown"></li>
                        <li class="countdown flex flex-col"><span class="cntnum text-[8vw] font-bold" id="minutes">31</span><span class="text-[2vw]">Minutes</span></li>
                        <li class="countdown"></li>
                        <li class="countdown flex flex-col"><span class="cntnum text-[8vw] font-bold" id="seconds">42</span><span class="text-[2vw]">Seconds</span></li>
                    </ul>
                </div>
                <div id="content" class="hidden font-superfeel text-[#7fb051] text-[6vw] md:text-[8vw] emoji">
                    CLOSED
                </div>
            </div>
        </div>

    <!-- Competitions Section -->
        <div class="comp flex flex-col w-full items-center justify-center bg-cover bg-center text-[#ffff]" id="competitions">
            {{-- Kompetisi --}}
            <div class="flex flex-col text-[2.5vw] text-white font-nohemiregular bg-[#DFD5FA] w-full h-[30vw] items-center justify-center bg-cover bg-center">
                <img src="images/competition.svg" class="res w-[75%] -translate-y-[0vw] pb-2 md:pb-[1vw]" alt="">  
                <div class="flex flex-row justify-center items-center gap-x-7 md:gap-x-10 font-nohemiregular font-bold pt-5 pb-3 text-[#7610E7]">
                    <button class="milih border-dashed border-2 border-ungu rounded-3xl px-9" id="psmp" href="#" onclick="smp()">SMP</button>
                    <button class="milih border-dashed border-2 border-ungu rounded-3xl px-9" id="psma" href="#" onclick="sma()">SMA</button>
                    <button class="milih border-dashed border-2 border-ungu rounded-3xl px-9" id="pumum" href="#" onclick="umum()">UMUM</button>
                </div>
            </div>

            {{-- SAINTEK --}}
            <div class="flex flex-col text-[4vw] md:text-[2vw] text-white font-nohemiregular bg-[#F0EAFF] w-full h-auto items-center justify-start bg-cover bg-center">
                <div class="flex flex-row justify-center align-top font-nohemiregular font-medium pt-14 pb-16">
                    <h1 class="rounded-full bg-auto bg-[#662E93] px-6 py-5">SCIENCE AND TECHNOLOGY</h1>
                </div>
                <!-- Menambahkan padding-bottom yang responsif -->
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 w-[90%] gap-x-16 gap-y-6 lg:gap-x-[6vw] pb-12 md:pb-16 lg:pb-20">
                    <!-- Science Arcade -->
                    <div class="relative group">
                        <img src="images/comp/sci.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[10%] left-1/2 transform -translate-x-1/2 w-[80%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/st-scicomp.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Social Arcade -->
                    <div class="relative group">
                        <img src="images/comp/social.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[13%] left-1/2 transform -translate-x-1/2 w-[70%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/st-socialcomp.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Math Arcade -->
                    <div class="relative group">
                        <img src="images/comp/math.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[10%] left-[52%] transform -translate-x-1/2 w-full cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/st-mathcomp.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 right-[4%] bottom-[24%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- STEM Arcade -->
                    <div class="relative group">
                        <img src="images/comp/stem.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[18%] left-1/2 transform -translate-x-1/2 w-[63%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/st-stemcomp.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- JOURNAL --}}
            <div class="flex flex-col text-[4vw] md:text-[2vw] text-white font-nohemiregular bg-[#DFD5FA] w-full h-auto items-center justify-start bg-cover bg-center">
                <div class="flex flex-row justify-center align-top font-nohemiregular font-medium pt-14 pb-16">
                    <h1 class="rounded-full bg-auto bg-[#662E93] px-6 py-5">JOURNALISTIC</h1>
                </div>
                <!-- Menambahkan padding-bottom yang responsif -->
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 w-[90%] gap-x-16 gap-y-6 lg:gap-x-[6vw] pb-12 md:pb-16 lg:pb-20">
                    <!-- Essay Arcade -->
                    <div class="relative group">
                        <img src="images/comp/essay.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[10%] left-[55%] transform -translate-x-1/2 w-[80%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/jurnal-esai.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 right-[5%] bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Photography Arcade -->
                    <div class="relative group">
                        <img src="images/comp/photo.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[8%] left-[48%] transform -translate-x-1/2 w-[75%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/jurnal-fotografi.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[5%] left-[5%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Short Movie Arcade -->
                    <div class="relative group">
                        <img src="images/comp/sm.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[17%] left-[52%] transform -translate-x-1/2 w-[70%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/jurnal-sm.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 right-[4%] bottom-[24%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Karya Tulis Arcade -->
                    <div class="relative group">
                        <img src="images/comp/kt.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[18%] left-1/2 transform -translate-x-1/2 w-[63%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/jurnal-lkti.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SPAC --}}
            <div class="flex flex-col text-[4vw] md:text-[2vw] text-white font-nohemiregular bg-[#F0EAFF] w-full h-auto items-center justify-start bg-cover bg-center">
                <div class="flex flex-row justify-center align-top font-nohemiregular font-medium pt-14 pb-16">
                    <h1 class="rounded-full bg-auto bg-[#662E93] px-6 py-5">SPORTS, ARTS, AND CULTURES</h1>
                </div>
                <!-- Menambahkan padding-bottom yang responsif -->
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 w-[90%] gap-x-16 gap-y-6 lg:gap-x-[6vw] pb-12 md:pb-16 lg:pb-20">
                    <!-- Soccer Arcade -->
                    <div class="relative group">
                        <img src="images/comp/soccer.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[13%] left-[55%] transform -translate-x-1/2 w-[75%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/sac-soc.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 right-[12%] bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Rato Jaroe Arcade -->
                    <div class="relative group">
                        <img src="images/comp/rj.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[13%] left-1/2 transform -translate-x-1/2 w-[70%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/sac-rj.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Music Cover Arcade -->
                    <div class="relative group">
                        <img src="images/comp/music.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[6%] left-[50%] transform -translate-x-1/2 w-[95%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/sac-mc.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 right-[4%] bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Mobile Legends Arcade -->
                    <div class="relative group">
                        <img src="images/comp/ml.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[18%] left-1/2 transform -translate-x-1/2 w-[63%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/sac-ml.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[10%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- LANG --}}
            <div class="flex flex-col text-[4vw] md:text-[2vw] text-white font-nohemiregular bg-[#DFD5FA] w-full h-auto items-center justify-start bg-cover bg-center">
                <div class="flex flex-row justify-center align-top font-nohemiregular font-medium pt-14 pb-16">
                    <h1 class="rounded-full bg-auto bg-[#662E93] px-6 py-5">SCIENCE AND TECHNOLOGY</h1>
                </div>
                <!-- Menambahkan padding-bottom yang responsif -->
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 w-[90%] gap-x-16 gap-y-6 lg:gap-x-[6vw] pb-12 md:pb-16 lg:pb-20">
                    <!-- Debat Arcade -->
                    <div class="relative group">
                        <img src="images/comp/debat.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[20%] left-1/2 transform -translate-x-1/2 w-[60%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/ldbi.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[17%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Speech Arcade -->
                    <div class="relative group">
                        <img src="images/comp/speech.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[13%] left-1/2 transform -translate-x-1/2 w-[60%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/speech.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Storytelling Arcade -->
                    <div class="relative group">
                        <img src="images/comp/stortel.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[10%] left-1/2 transform -translate-x-1/2 w-[65%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/stortel.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 right-[4%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Monolog Arcade -->
                    <div class="relative group">
                        <img src="images/comp/monolog.svg" alt="Science Arcade" class="w-full">
                        <div class="logo-hover-container absolute top-[18%] left-1/2 transform -translate-x-1/2 w-[63%] cursor-pointer transition-all duration-300">
                            <img src="images/comp/logo/monologue.png" alt="Jurnal" class="logo w-full transition-opacity duration-300 z-[60] group-hover:opacity-0">
                            <div class="hover-menu absolute text-[3vw] md:text-[1.5vw] inset-0 flex flex-col gap-2 items-center justify-center opacity-0 transition-opacity duration-300 z-[30] group-hover:opacity-100 bottom-[20%]">
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">DAFTAR</button>
                                <button class="bg-ungu hover:bg-purple-800 text-pink-300 font-bold py-1 px-2 rounded-full sm:px-6 md:px-6 lg:px-7">JUKNIS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Rundown Section -->
        <div class="run flex flex-col w-full h-[69.688vw] items-center justify-center bg-cover bg-center -z-50" style="background-image: url({{ asset('images/bg-rundown.png') }});">
            <img src="images/blur.svg" class="res absolute w-full z-10" alt="">
            <img src="images/rundown.svg" class="res w-[65%] z-20 -translate-y-[13vw]" alt="">
            {{-- <img src="images/timeline.svg" class="res w-[58%] z-20 -translate-y-[0vw]" alt=""> --}}
            <img src="images/rund.svg" class="res w-[60%] z-20 -translate-y-[7vw]" alt="">

            {{-- <div class="flex text-justify-between items-center z-50 gap-x-52 -translate-y-[10vw] translate-x-[0vw]">
                <!-- Thursday -->
                <div class="flex flex-col items-center w-1/3 max-w-[300px]">
                  <h2 class="text-white text-4xl font-bold">Thursday</h2>
                  <p class="text-white/80 text-sm">17 April 2025</p>
                  <div class="mt-28 text-xl">
                    <p class="text-white text-center italic">Opening Concert –</p>
                    <p class="text-white text-center">First Day Competitions</p>
                  </div>
                </div>
            
                <!-- Friday -->
                <div class="flex flex-col items-center">
                  <h2 class="text-white text-4xl font-bold">Friday</h2>
                  <p class="text-white/80 text-sm">18 April 2025</p>
                  <div class="mt-28 text-xl">
                    <p class="text-white text-center">Second Day</p>
                    <p class="text-white text-center">Competitions</p>
                  </div>
                </div>
            
                <!-- Saturday -->
                <div class="flex flex-col items-center">
                  <h2 class="text-white text-4xl font-bold">Saturday</h2>
                  <p class="text-white/80 text-sm">18 April 2025</p>
                  <div class="mt-28 text-xl">
                    <p class="text-white text-center italic">Closing and Awarding –</p>
                    <p class="text-white text-center">Final Day Competitions</p>
                  </div>
                </div>
            </div> --}}
        </div>
    <!-- Trailer Section -->
        <div class="run flex flex-col w-full h-[69.74vw] items-center justify-center bg-cover bg-center -z-50" style="background-image: url({{ asset('images/bg-trailer.png') }});">
            <img src="images/blur2.png" class="res absolute w-full z-40 -translate-y-[35vw]" alt="">
            <img src="images/trailer.svg" class="res w-[50%] z-20 -translate-y-[22vw]" alt="">
        
        </div>
        <img src="images/blur3b.png" class="res absolute w-full z-50 -translate-y-[5vw] object-cover blur-xl" alt="" draggable="false">
    <!-- About Us Section -->
    <div class="w-full min-h-screen flex flex-col items-center justify-center bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/bg-about.png') }});">
        <div class="text-center text-[#ffff] w-full max-w-2xl md:max-w-4xl bg-[#8408F3]/70 rounded-[4rem] p-6 md:p-12 lg:p-16">
            <img src="{{ asset('images/about.svg') }}" class="w-[75%] mx-auto mb-5" alt="About Us">
            <p class="text-lg md:text-2xl lg:text-3xl leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>

    <!-- Footer -->
<div>
    @include('components.footer')
</div>

<script src="arcade.js"></script>
<script src="mobile-arcade.js"></script>

</body>


</html>