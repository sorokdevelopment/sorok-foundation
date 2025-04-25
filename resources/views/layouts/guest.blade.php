<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            @livewire('navigation-menu')
        </header>
        
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>

        <footer class="relative mt-32 text-white">
            <div class="absolute inset-0 w-full h-full">
                <img src="{{ Vite::asset('public/images/footer-bg.png') }}" 
                     alt="Background" 
                     class="object-cover w-full h-full">
            </div>
        
            <x-layouts.container>
                <div class="relative max-w-screen-xl pt-20 pb-8 mx-auto">
                    <div class="flex flex-col items-center space-y-6">
                        <img src="{{ Vite::asset('public/images/logo-secondary.png') }}" 
                            alt="Website Logo" 
                            class="w-full sm:w-1/2 md:w-1/3">
                    </div>
                    
                    <div class="flex flex-col items-start justify-between md:justify-center lg:justify-between lg:mt-8 lg:flex-row-reverse">
                        <div class="flex flex-col items-center justify-center mt-8 space-y-4 md:justify-start">
                            <div class="flex flex-col space-y-8 right-corner">
                                <div class="space-y-4">
                                    <h2 class="text-lg font-bold text-white lg:text-xl">
                                        Programs and Social Services Department                                    
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="text-sm text-white material-icons">call</i>
                                            <p class="text-sm">(+63) 917 163 7834</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <i class="text-sm text-white material-icons">mail</i>
                                            <p class="text-sm font-secondary">socialservices@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="text-lg font-bold text-white lg:text-xl">
                                        Fundraising and Communications Department                                        
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="text-sm text-white material-icons">call</i>
                                            <p class="text-sm">(+63) 917 168 7834</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <i class="text-sm text-white material-icons">mail</i>
                                            <p class="text-sm font-secondary">fcd@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="text-lg font-bold text-white lg:text-xl">
                                        Human Resources Department
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="text-sm text-white material-icons">mail</i>
                                            <p class="text-sm font-secondary">hr@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="text-lg font-bold text-white lg:text-xl">
                                        Finance Department                                        
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="text-sm text-white material-icons">mail</i>
                                            <p class="text-sm font-secondary">finance@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="space-y-4">
                                    <h2 class="text-lg font-bold text-white lg:text-xl">
                                        General Inquiries                                        
                                    </h2>
                                    <div class="flex flex-col space-y-4 font-secondary">
                                        <div class="flex items-center space-x-2">
                                            <i class="text-sm text-white material-icons">mail</i>
                                            <p class="text-sm font-secondary">info@sorokuni.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>

                        <div class="flex flex-col items-center justify-center mt-8 space-y-4 md:justify-start">
                            <div class="flex flex-col space-y-8 left-corner">
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
                                        <i class="text-4xl fa-brands fa-facebook"></i>
                                        <i class="text-4xl fa-brands fa-instagram"></i>
                                        <i class="text-4xl fa-brands fa-youtube"></i>
                                        <i class="text-4xl fa-brands fa-tiktok"></i>
                                        <i class="text-4xl fa-brands fa-linkedin-in"></i>
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
