<x-layouts.app>
    <div>   
        <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333] ">
            <div 
                class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ Vite::asset('public/images/about-banner.png') }}');">
            </div>
        
            <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
        
            <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
                <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                    ABOUT US
                </h1>
            </div>
        </div>
        
        <div class="bg-white border-b-4 md:border-l-6 md:border-b-0 border-[#00674F] md:rounded-r-lg md:max-w-2/3 mx-auto shadow-lg md:-mt-24 relative z-1 scroll-section">
            <div class="py-12 px-4 sm:px-6 md:px-8 text-content">
                <p class="font-secondary text-sm lg:text-lg md:text-base leading-8 lg:leading-10">
                    Sorok Uni Foundation Inc. is a non-profit organization for change that works for and with:
                    Persons Affected by Leprosy (PALs), Individuals and Families in Street Situations,
                    Underprivileged Children, Disadvantaged Indigenous Peoples, Online Sexually Abused and
                    Exploited Children (OSAEC) and Persons with Disability (PWDs). We help the above
                    mentioned marginalized sectors in the Philippines through facilitating their empowerment
                    as individuals and communities and by advancing their interests as a group. Our ways of
                    helping are designed to capacitate fellow Filipinos to help themselves and become
                    significant contributors to nation-building of the Philippines. This is aligned with our vision
                    of having A PHILIPPINES WITHOUT FORGOTTEN NEIGHBORS.
                </p>
            </div>
        </div>


        <x-layouts.container>
            <div class="py-12 mt-12 space-y-20 w-full flex flex-col justify-center items-center">

                <div class="grid w-full items-center gap-8 md:grid-cols-2 scroll-section">
                    <div class="text-center md:text-left text-content">
                        <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl">
                            OUR VISION
                        </h1>
                        <p class="hidden mt-6 md:block font-secondary lg:text-lg md:text-lg leading-8">
                            “A Philippines Without Forgotten Neighbors”
                        </p>
                    </div>
                
                    <div class="flex flex-col items-center justify-center space-y-8 image-content">
                        <img src="{{ Vite::asset('public/images/banner-1.jpg') }}" 
                            alt="Background" 
                            loading="lazy"
                            class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg image-content">
                        
                        <p class="md:hidden text-center font-secondary text-base leading-8">
                            “A Philippines Without Forgotten Neighbors”
                        </p>
                    </div>
                </div>



                <div class="grid w-full items-center gap-8 md:grid-cols-2 scroll-section md:grid-flow-dense">
                    <div class="text-center md:text-left  md:col-start-2 text-content">
                        <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl">
                            OUR MISSION
                        </h1>
                        <p class="hidden mt-6 md:block font-secondary lg:text-lg md:text-base leading-8">
                            Sorok Uni Foundation, Inc. aims to emancipate forgotten neighbors in the Philippines from
                            social stigma and/or lowest level of poverty through facilitating their empowerment and
                            raising social awareness.
                        </p>
                    </div>
                
                    <div class="flex flex-col items-center justify-center space-y-8  md:col-start-1 image-content">
                        <img src="{{ Vite::asset('public/images/banner-2.jpg') }}" 
                            alt="Background" 
                            loading="lazy"
                            class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg image-content">
                        
                        <p class="md:hidden text-center font-secondary text-base leading-8">
                            Sorok Uni Foundation, Inc. aims to emancipate forgotten neighbors in the Philippines from
                            social stigma and/or lowest level of poverty through facilitating their empowerment and
                            raising social awareness.
                        </p>
                    </div>
                </div>


                <div class="grid w-full items-center gap-8 md:grid-cols-2 scroll-section">
                    <div class="text-center md:text-left text-content">
                        <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl">
                            OUR PHILOSOPHY
                        </h1>
                        <p class="hidden mt-6 md:block font-secondary lg:text-lg md:text-base leading-8">
                            “Give a man a fish and you feed him for a day. Teach a man to fish, you feed him for a lifetime.”
                        </p>
                    </div>
                
                    <div class="flex flex-col items-center justify-center space-y-8 image-content">
                        <img src="{{ Vite::asset('public/images/banner-3.jpg') }}" 
                            alt="Background" 
                            loading="lazy"
                            class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg image-content">
                        
                        <p class="md:hidden text-center font-secondary text-base leading-8">
                            “Give a man a fish and you feed him for a day. Teach a man to fish, you feed him for a lifetime.”
                        </p>
                    </div>
                </div>


                
                <div class="grid w-full items-center gap-8 md:grid-cols-2 scroll-section md:grid-flow-dense">
                    <div class="text-center md:text-left  md:col-start-2 text-content">
                        <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl">
                            CORE VALUES
                        </h1>
                        <p class="hidden mt-6 md:block font-secondary lg:text-lg md:text-base leading-8">
                            Love the Lord our God, above all Love our country (Nationalism) Love our neighbors (Equality, Inclusivity and Compassion) Love our organization as a whole (Teamwork)
                        </p>
                    </div>
                
                    <div class="flex flex-col items-center justify-center space-y-8  md:col-start-1 image-content">
                        <img src="{{ Vite::asset('public/images/banner-2.jpg') }}" 
                            alt="Background"
                            loading="lazy" 
                            class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg image-content">
                        
                        <p class="md:hidden text-center font-secondary text-base leading-8">
                            Love the Lord our God, above all Love our country (Nationalism) Love our neighbors (Equality, Inclusivity and Compassion) Love our organization as a whole (Teamwork)
                        </p>
                    </div>
                </div>
            </div>

        </x-layouts.container>
        
        <x-layouts.container>

            <div class="relative mt-12 lg:pb-24 scroll-section">
                <img src="{{ Vite::asset('public/images/about-history.png') }}" 
                     alt="History Banner" 
                     loading="lazy" 
                     class="w-full flex jutify-start items-start max-h-[30vh] sm:max-h-[40vh] lg:max-h-[70vh] object-cover">
                
                <div class="lg:absolute space-y-8 xl:space-y-12 lg:right-0 lg:top-0  bg-[#00674F] text-white w-full lg:rounded-l-3xl lg:w-1/2 2xl:h-full py-12 lg:py-8 xl:py-12 px-6 sm:px-8 md:px-12 lg:px-16 shadow-lg text-content">
                    <h1 class="font-bold xl:mt-4 text-center sm:text-left text-2xl md:text-3xl lg:text-4xl">
                        OUR HISTORY
                    </h1>
                    <p class="font-secondary text-sm lg:text-lg md:text-base leading-10 mt-4">
                        Sorok Uni Foundation was founded on May 7, 2002, by Capt. Jae Jung Jang, a businessman, 
                        former ship captain, and devout Christian. Capt. Jang's journey began during his frequent 
                        visits to the Tala Leprosarium (now Dr. Jose N. Rodriguez Memorial Hospital) in Tala, Caloocan, 
                        where he met many Filipinos affected by leprosy. One particular encounter changed his life forever. 
                        Capt. Jang recalls, “When I had the chance to hold the deformed hand of a Hansen’s patient, I was 
                        touched. It was as if God was saying to me, ‘You have to help them.’ From that moment, I knew I 
                        had to do more to support these individuals.”
                    </p>
                </div>
            </div>
            
        </x-layouts.container>

        

        
    </div>
</x-layouts.app>
