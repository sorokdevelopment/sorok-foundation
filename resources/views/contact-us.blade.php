<x-layouts.app>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333]">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/contact-banner.jpg') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                GET IN TOUCH
            </h1>
        </div>
    </div>
    
    <x-layouts.container>

        <div class="py-16 px-4">
            <div class="max-w-6xl mx-auto">
                
                <div class="bg-white rounded-lg shadow-lg border border-gray-100 mb-8">
                    <div class="bg-[#00674F] p-6 rounded-t-lg">
                        <div class="flex items-center justify-center space-x-3">
                            <i class="fa-solid fa-building text-2xl text-white"></i>
                            <h2 class="font-bold text-2xl text-white">Main Office</h2>
                        </div>
                    </div>
                    <div class="p-8 text-center">
                        <div class="space-y-2">
                            <p class="text-gray-600 font-medium">Direct Line</p>
                            <p class="font-bold text-[#00674F] text-2xl">
                                (02) 7000-2817
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    
                    <div class="bg-white rounded-lg shadow-lg border border-gray-100">
                        <div class="bg-[#00674F] p-6 rounded-t-lg">
                            <div class="flex items-center justify-center space-x-3">
                                <i class="fa-solid fa-phone text-xl text-white"></i>
                                <h3 class="font-bold text-xl text-white">Phone Directory</h3>
                            </div>
                        </div>
                        
                        <div class="p-8 space-y-6">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">
                                    Programs & Social Services
                                </h4>
                                <p class="font-semibold text-[#00674F]">
                                    (+63) 917 163 7834
                                </p>
                            </div>
                            
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">
                                    Fundraising & Communications
                                </h4>
                                <p class="font-semibold text-[#00674F]">
                                    (+63) 917 168 7834
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg border border-gray-100">
                        <div class="bg-[#00674F] p-6 rounded-t-lg">
                            <div class="flex items-center justify-center space-x-3">
                                <i class="fa-solid fa-envelope text-xl text-white"></i>
                                <h3 class="font-bold text-xl text-white">Email Directory</h3>
                            </div>
                        </div>
                        
                        <div class="p-8 space-y-6">
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">
                                    Programs & Social Services
                                </h4>
                                <p class="font-semibold text-[#00674F] break-all">
                                    socialservices@sorokuni.com
                                </p>
                            </div>
                            
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">
                                    Fundraising & Communications
                                </h4>
                                <p class="font-semibold text-[#00674F]">
                                    fcd@sorokuni.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-white rounded-lg shadow-lg border border-gray-100">
                    <div class="bg-[#00674F] p-6 rounded-t-lg">
                        <h2 class="font-bold text-xl text-white text-center">
                            Office Information
                        </h2>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                            <div>
                                <i class="fa-solid fa-clock text-[#00674F] text-2xl mb-3"></i>
                                <h3 class="font-bold text-gray-800 mb-2">Office Hours</h3>
                                <p class="text-gray-600">Monday - Friday<br>8:00 AM - 5:00 PM</p>
                            </div>
                            <div>
                                <i class="fa-solid fa-map-marker-alt text-[#00674F] text-2xl mb-3"></i>
                                <h3 class="font-bold text-gray-800 mb-2">Location</h3>
                                <p class="text-gray-600">
                                    UNISTAR Bldg. 1239 T. San Luis St. Brgy. 847 Pandacan, Manila, Philippines
                                </p>
                            </div>
                            <div>
                                <i class="fa-solid fa-headset text-[#00674F] text-2xl mb-3"></i>
                                <h3 class="font-bold text-gray-800 mb-2">Support</h3>
                                <p class="text-gray-600">Emergency Line<br>Available 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layouts.container>

</x-layouts.app>