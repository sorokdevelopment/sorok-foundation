<x-layouts.app>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333]">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/chairman-banner.jpg') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-end pb-12 text-white flex-col text-center scroll-section">
            <div class="text-content">
                <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl">
                    DR. JAE JUNG JANG
                </h1>
                <p class="text-center mt-4 font-secondary text-sm lg:text-xl md:text-base ">
                    Founder & Chairman of SOROK UNI FOUNDATION, INC. 
                </p>
            </div>
        </div>
    </div>
    
    <x-layouts.container>

        <div>
            <div class="py-12 scroll-section">
                <p class="font-secondary text-base md:text-lg lg:text-xl leading-10 text-content">
                    Welcome Friends,
                    <br><br>   
                     As the Founder and Chairman of SOROK UNI FOUNDATION, INC, I am proud to be a part of a community which aims to emancipate forgotten neighbors in the Philippines from social stigma and lowest level of poverty through empowerment and building sustainable communities, and where compassion, service, and dedication are the cornerstones of mission. Our journey began with a simple vision: a Philippines without forgotten neighbors, and each day, with your support, we are turning that vision into reality. 
                    <br><br>
                    Thanks to our passionate volunteers, generous donors, and the hard work of our staff, we have been able to reach out to countless individuals and communities.
                    <br><br>
                     Our website is home to a collection of stories of hope and triumph as well as updates on our current projects and glimpse into our future plans. This is more than just an update; it's a call to join hands and make a better tomorrow for our forgotten neighbors, no matter where we are from.
                    <br><br>
                     Together, we can continue to build on our successes and face the challenges ahead with unwavering optimism. I am both humbled and inspired every day by the incredible impact of our collective efforts and the profound goodness of human spirit that fuels our cause.
                    <br><br>
                     Thank you for being an essential part of our journey. Let us continue to bring light where there is darkness and give hope to those who need it most. 
                    <br><br>
                    Warmest regards,
                </p>
            </div>

            <div class="py-12 scroll-section">
                <h1 class="text-center font-bold text-3xl md:text-4xl lg:text-5xl">
                    AWARDS AND RECOGNITIONS
                </h1>

                <div class="grid grid-cols-1 md:grid-cols-2 mx-auto md:mt-20 gap-12 mt-12">
                    <livewire:components.card.awards 
                        title="Korean National Orders of Merits"
                        imgName="awards-1.png"
                        description="On the 27th day of September 2017, Chairman Jang received the Korea National Order of Merit from Republic of Korean Former President Jae In-Moon."
                    />
                    <livewire:components.card.awards 
                        title="Korea Maritime University
                                (KMU) Award"
                        imgName="awards-2.png"
                        description="On the 5th day of November 2003, the chairman received the certificate honoring the overseas excellence of businessman alumnus and honors him as the first recipient of this award."
                    />
                    <livewire:components.card.awards 
                        title="Doctors Degree in Humanities"
                        imgName="awards-3.png"
                        description="Chairman Jang received his Doctors Degree in Humanaties at the Calvin University in March 2019. Michigan, U.S.A."
                    />
                    <livewire:components.card.awards 
                        title="Plaque of Recognition (The General Assembly of the Presbyterian Church of the Philippines, Inc.)"
                        imgName="awards-4.png"
                        description="A Plaque of Recognition given to Chairman Jang for his time and effort as a 'Ministry Partner' in God's kingdom on the 36th GAPCP anniversary celebration and was given 12th day of June 2023."
                    />
                   
                </div>
                
            </div>
        </div>
    </x-layouts.container>


</x-layouts.app>
