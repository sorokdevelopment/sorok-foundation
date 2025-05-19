<footer class="relative mt-32 bg-white">
    <x-layouts.container>
        <div class="relative py-24 mx-auto">
            
            <div class="flex flex-col justify-between md:justify-center lg:justify-between items-start lg:flex-row">
                <div class="flex flex-col items-center justify-center md:justify-start space-y-4">
                    <div class="right-corner flex flex-col space-y-8">
                        <div class="space-y-4">
                            <h2 class="font-bold text-lg lg:text-xl">
                                Programs and Social Services Department                                    
                            </h2>
                            <div class="flex flex-col space-y-4 font-secondary">
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">call</i>
                                    <p class="text-sm">(+63) 917 163 7834</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">mail</i>
                                    <p class="text-sm font-secondary">socialservices@sorokuni.com</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="space-y-4">
                            <h2 class="font-bold text-lg lg:text-xl">
                                Fundraising and Communications Department                                        
                            </h2>
                            <div class="flex flex-col space-y-4 font-secondary">
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">call</i>
                                    <p class="text-sm">(+63) 917 168 7834</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">mail</i>
                                    <p class="text-sm font-secondary">fcd@sorokuni.com</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="space-y-4">
                            <h2 class="font-bold text-lg lg:text-xl">
                                Human Resources Department
                            </h2>
                            <div class="flex flex-col space-y-4 font-secondary">
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">mail</i>
                                    <p class="text-sm font-secondary">hr@sorokuni.com</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="space-y-4">
                            <h2 class="font-bold text-lg lg:text-xl">
                                Finance Department                                        
                            </h2>
                            <div class="flex flex-col space-y-4 font-secondary">
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">mail</i>
                                    <p class="text-sm font-secondary">finance@sorokuni.com</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="space-y-4">
                            <h2 class="font-bold text-lg lg:text-xl">
                                General Inquiries                                        
                            </h2>
                            <div class="flex flex-col space-y-4 font-secondary">
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">mail</i>
                                    <p class="text-sm font-secondary">info@sorokuni.com</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="mt-8 flex flex-col items-center justify-center space-y-4">
                        
                    <livewire:google-map-coordinates />
                        
                    <div class="flex mt-4 justify-center items-center">
                        <h2 class="font-bold text-lg lg:text-xl">
                            UNISTAR Bldg. 1239 T. San Luis St. Brgy. 847 Pandacan, Manila, Philippines
                        </h2>
                    </div>
    
                </div>
            </div>
        </div>  
    </x-layouts.container>
    <div class="bg-[#00674F] text-white w-full py-24 lg:py-8">
        <x-layouts.container>
            <div class="flex justify-between flex-col-reverse space-y-16 h-full space-y-reverse lg:space-y-0 lg:flex-row  w-full items-center">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('images/logo-secondary.png') }}" 
                        alt="Website Logo" 
                        class="w-full w-sm">
                </div>
                <div class="flex justify-around items-center">
                    <div class="space-x-4 sm:space-x-12 lg:space-x-6">
                        <i class="fa-brands text-3xl sm:text-4xl fa-facebook"></i>
                        <i class="fa-brands text-3xl sm:text-4xl fa-instagram"></i>
                        <i class="fa-brands text-3xl sm:text-4xl fa-youtube"></i>
                        <i class="fa-brands text-3xl sm:text-4xl fa-tiktok"></i>
                        <i class="fa-brands text-3xl sm:text-4xl fa-linkedin-in"></i>
                    </div>
                </div>
                <div class="flex flex-col justify-center space-y-4">
                    <x-buttons.secondary>
                        JOIN US
                    </x-buttons.secondary>
                    <h2 class="font-secondary text-sm lg:text-base text-white">
                        DSWD-SB-00001-2025                                  
                    </h2>

                </div>

            </div>
        </x-layouts.container>

    </div>
</footer>