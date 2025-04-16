<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/9d5bf2e3d5.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image" href="{{ Vite::asset('public/images/logo.png') }}" />
        <title>Sorok Foundation</title>
        @livewireStyles

    </head>
    <body class="text-[#333333] bg-[#F5F5F5] overflow-x-hidden font-primary">
        <header class="bg-white">
            <x-layouts.container>
                <nav x-data="{ open: false }" class="h-[100px] lg:h-[120px] text-2xl font-primary font-bold flex items-center w-full justify-between relative">
                    <div class="w-full flex-1 h-full flex justify-start items-center">
                        <a href="{{  route('home') }}" >
                            <img src="{{ Vite::asset('public/images/logo-primary.png') }}" alt="Website Logo" class="w-[220px] lg:w-[280px]">

                        </a>
                    </div> 


                    <div class="hidden flex-3 xl:flex items-center justify-center">
                        <ul class="flex justify-center text-sm w-full xl:space-x-6 2xl:space-x-12">
                            @php
                                $links = [
                                    'home' => 'HOME',
                                    'about' => 'ABOUT',
                                    'programs-and-services' => 'PROGRAMS AND SERVICES',
                                    'chairman-corner' => "CHAIRMAN'S CORNER",
                                    'updates' => 'UPDATES'
                                ];
                            @endphp
                            @foreach ($links as $route => $label)
                                <li class="text-center hover:text-[#00674F]">
                                    <a class="{{ request()->is($route) ? 'active' : '' }}" href="{{ route($route) }}">
                                        <p>{{ $label }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="hidden xl:flex">
                        <x-buttons.primary>
                            <a href="{{ route('contact-us') }}"  class="w-full">
                                CONTACT US 
                            </a>
                        </x-buttons.primary>
                    </div>

                    <div class="block xl:hidden">
                        <div x-on:click="open = true" class="cursor-pointer">
                            <img src="{{ Vite::asset('public/images/menu-bar.png') }}" alt="menu bar" class="h-[25px]">
                        </div>    

                        <div x-show="open" 
                            x-on:click="open = false"
                            x-transition:enter="transition-opacity ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition-opacity ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 bg-[#333333a0] z-10"
                            x-cloak>
                        </div>

                        <div x-show="open"
                            x-transition:enter="transition transform ease-out duration-300"
                            x-transition:enter-start="translate-x-full opacity-0"
                            x-transition:enter-end="translate-x-0 opacity-100"
                            x-transition:leave="transition transform ease-in duration-300"
                            x-transition:leave-start="translate-x-0 opacity-100"
                            x-transition:leave-end="translate-x-full opacity-0"
                            class="bg-white font-bold w-[70vw] md:w-[50vw] flex flex-col space-y-12 py-12 px-2 text-center items-center text-sm sm:text-lg h-screen z-50 fixed top-0 right-0 shadow-lg"
                            x-on:click.stop
                            x-cloak>
                            
                            <div x-on:click="open = false" class="absolute top-5 right-5 cursor-pointer">
                                <i class="fa-solid fa-xmark text-2xl text-red-500 hover:text-red-700"></i>                        
                            </div>

                            @foreach ($links as $route => $label)
                                <a class="{{ request()->is($route) ? 'active' : '' }}" href="{{ route($route) }}">
                                    <p>{{ $label }}</p>
                                </a>
                            @endforeach
                            <x-buttons.primary>
                                <a  href="{{ route('contact-us') }}" >
                                    CONTACT US 
                                </a>
                            </x-buttons.primary>
                        </div>
                    </div>
                    
                </nav>
            </x-layouts.container>
        </header>
        
        
     

        <main class="mb-8">

            {{ $slot }}

        </main>


        <footer class="relative mt-32 text-white">
            <div class="absolute inset-0 w-full h-full">
                <img src="{{ Vite::asset('public/images/footer-bg.png') }}" 
                     alt="Background" 
                     class="w-full h-full object-cover">
            </div>
        
            <x-layouts.container>
                <div class="relative pt-20 pb-8 max-w-screen-xl mx-auto">
                    <div class="flex flex-col items-center space-y-6">
                        <img src="{{ Vite::asset('public/images/logo-secondary.png') }}" 
                            alt="Website Logo" 
                            class="w-full sm:w-1/2 md:w-1/3">
                    </div>
                    
                    <div class="flex flex-col justify-between md:justify-center lg:justify-between lg:mt-8 items-start lg:flex-row-reverse">
                        <div class="mt-8 flex flex-col items-center justify-center md:justify-start space-y-4">
                            <div class="right-corner flex flex-col space-y-8">
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-white">
                                        Programs and Social Services Department                                    
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="material-icons text-sm text-white">call</i>
                                            <p class="text-sm">(+63) 917 163 7834</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <i class="material-icons text-sm text-white">mail</i>
                                            <p class="text-sm font-secondary">socialservices@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-white">
                                        Fundraising and Communications Department                                        
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="material-icons text-sm text-white">call</i>
                                            <p class="text-sm">(+63) 917 168 7834</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <i class="material-icons text-sm text-white">mail</i>
                                            <p class="text-sm font-secondary">fcd@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-white">
                                        Human Resources Department
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="material-icons text-sm text-white">mail</i>
                                            <p class="text-sm font-secondary">hr@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-white">
                                        Finance Department                                        
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="material-icons text-sm text-white">mail</i>
                                            <p class="text-sm font-secondary">finance@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-white">
                                        General Inquiries                                        
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="material-icons text-sm text-white">mail</i>
                                            <p class="text-sm font-secondary">info@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>

                        <div class="mt-8 flex flex-col items-center justify-center md:justify-start space-y-4">
                            <div class="left-corner flex flex-col space-y-8">
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-[#FFC000]">
                                        DSWD REGISTRATION NUMBER                                   
                                    </h2>
                                    <p class="text-sm text-white">
                                        SB-R-0505050-2020                                
                                    </p>
                                    
                                </div>
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-[#FF0080]">
                                        DSWD SOLICITATION PERMIT NUMBER                            
                                    </h2>
                                    <p class="text-sm text-white">
                                        SB-R-0505050-2020                                
                                    </p>
                                    
                                </div>
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-[#00B050]">
                                        Location                                   
                                    </h2>
                                    <p class="text-sm text-white">
                                        UNISTAR Bldg. 1239 T. San Luis St. Brgy. 847 Pandacan, Manila, 1011 Metro Manila Philippines
                                    </p>
                                    
                                </div>
                                <div class="space-y-4">
                                    <h2 class="font-bold text-lg lg:text-xl text-[#00B0F0]">
                                        Follow Us                                  
                                    </h2>
                                    <div class="flex justify-around">
                                        <i class="fa-brands text-4xl fa-facebook"></i>
                                        <i class="fa-brands text-4xl fa-instagram"></i>
                                        <i class="fa-brands text-4xl fa-youtube"></i>
                                        <i class="fa-brands text-4xl fa-tiktok"></i>
                                        <i class="fa-brands text-4xl fa-linkedin-in"></i>
                                    </div>
                                    
                                </div>
            
                            </div>  
                        </div>
                    </div>
                </div>  
            </x-layouts.container>
        </footer>
        
        
        @livewireScripts
    
        @vite(['resources/js/app.js'])

        <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/67e0ec56241a85190f5bbba7/1in39mcps';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
            </script>
        <!--End of Tawk.to Script-->

    </body>
</html>
