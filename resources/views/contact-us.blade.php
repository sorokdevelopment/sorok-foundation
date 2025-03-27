<x-layouts.app>
    <div class="relative">
        <img src="{{ Vite::asset('public/images/contact-us.png') }}" 
            alt="Program hero section" 
            class="w-full max-h-[75vh] object-cover">
        <div class="absolute inset-0 bg-[#333333] opacity-80 flex flex-col py-4 justify-center items-center text-white px-4">
            <h1 class="font-bold text-3xl text-center md:text-5xl lg:text-6xl text-white">
                GET IN TOUCH
            </h1>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:-mt-24 ">
        <div class="bg-white border-b-4 md:border-l-6 md:border-b-0 border-[#00674F] md:rounded-r-lg md:max-w-2/3 mx-auto shadow-lg relative z-1">
            <div class="py-12 px-4 sm:px-6 md:px-8 w-full">
                <div class="space-y-4 flex flex-col justify-center items-center">
                    <i class="fa-solid fa-phone text-4xl lg:text-5xl"></i>
                    <h1 class="font-bold text-lg md:text-xl lg:text-2xl text-center">
                        Programs and Social Services Department            
                    </h1>
                    <p class="font-secondary text-center font-bold text-primary text-base lg:text-lg leading-8">
                        (+63) 917 163 7834
                    </p>
                </div>
                <div class="space-y-4 mt-8 flex flex-col justify-center items-center">
                    <h1 class="font-bold text-lg md:text-xl lg:text-2xl text-center">
                        Fundraising and Communications Department           
                    </h1>
                    <p class="font-secondary text-center font-bold text-primary text-base lg:text-lg leading-8">
                        (+63) 917 168 7834
                    </p>
                </div>
    
            </div>
        </div>
        <div class="bg-white border-b-4 md:border-l-6 md:border-b-0 border-[#00674F] md:rounded-r-lg md:max-w-2/3 mx-auto shadow-lg  relative z-1">
            <div class="py-12 px-4 sm:px-6 md:px-8 w-full">
                <div class="space-y-4 flex flex-col justify-center items-center">
                    <i class="fa-solid fa-envelope text-4xl lg:text-5xl"></i>
                    <h1 class="font-bold text-lg md:text-xl lg:text-2xl text-center">
                        Programs and Social Services Department           
                    </h1>
                    <p class="font-secondary text-center font-bold text-primary text-base lg:text-lg leading-8">
                        socialservices@sorokuni.com                
                    </p>
                </div>
                <div class="space-y-4 mt-8 flex flex-col justify-center items-center">
                    <h1 class="font-bold text-lg md:text-xl lg:text-2xl text-center">
                        Fundraising and Communications Department                
                    </h1>
                    <p class="font-secondary text-center font-bold text-primary text-base lg:text-lg leading-8">
                        fcd@sorokuni.com
                    </p>
                </div>
    
            </div>
        </div>
    
    </div>
    

    

    
</x-layouts.app>
