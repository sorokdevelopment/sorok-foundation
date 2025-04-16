<div>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333]">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ Vite::asset('public/images/home-banner.png')}}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center text-content">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl">
                LET’S BUILD A COMMUNITY
            </h1>
            <p class="font-secondary text-sm mt-6">
                Explore our programs and choose how you’d like to contribute. Your support can make a significant impact on our mission.
            </p>
        </div>
    </div>

    <div class="mt-16 flex flex-col md:flex-row relative about-section scroll-section">
    
        <x-layouts.container class="relative">
            <div class="flex flex-col md:flex-row md:space-x-12">
                <div class="flex flex-1 relative image-content">
                    <img src="{{ Vite::asset('public/images/home-banner-s2.png') }}" 
                        alt="Section 2 Banner" 
                        loading="lazy"
                        class="w-full sm:h-96 sm:object-cover md:object-contain md:h-auto object-contain">
                </div>
    
                <div class="flex items-center justify-center flex-1 xl:flex-2 text-content">
                    <div class="mt-8 md:mt-0 flex-col">
                        <h2 class="mt-8 font-bold text-2xl lg:text-4xl">
                            ABOUT US 
                        </h2>
                        <p class="font-secondary text-sm lg:text-lg md:text-base leading-8 lg:leading-10 mt-8">
                            Sorok Uni Foundation Inc. is a non-profit organization for change and development that works for and with: Persons Affected by Leprosy (PALs), Individuals and Families in Street Situations, Underprivileged Children, Disadvantaged Indigenous Peoples, Online Sexually Abused and Exploited Children (OSAEC), and Children and Youth with Disability (CYD).                    
                        </p>
                        <div class="mt-12">
                            <x-buttons.secondary>
                                READ MORE
                            </x-buttons.secondary>
                        </div>
                        <div class="mt-16 xl:w-2/3">
                            <div class="border-t-4 border-[#00674F] lg:border-l-6 lg:border-t-0 bg-white px-8 py-6 lg:rounded-e-lg shadow-lg">
                                <div class="py-6 space-y-6 flex flex-col items-center">
                                    <h2 class="text-center font-bold text-lg">
                                        Interested? Send us a message
                                    </h2>
                                    <div class="flex justify-center items-center space-x-4">
                                        <i class="material-icons mr-2 text-2xl fill-current opacity-80">mail</i>
                                        <p class="text-[#00674F] font-medium font-secondary">
                                            info@sorokuni.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
    
        </x-layouts.container>
    </div>
    

    @if($sponsors->isNotEmpty())
        <livewire:sponsor.index :sponsors="$sponsors" />
    @endif
    
    
    <div class="mt-12  scroll-section">
        <div class="flex flex-col md:flex-row relative">
            <x-layouts.container class="relative">
                <div class="flex flex-col md:flex-row md:space-x-12">
                    <div class="flex flex-1 relative image-content">
                        <img src="{{ Vite::asset('public/images/home-chairman.png') }}" 
                                alt="Chairman Banner" 
                                loading="lazy"
                                class="w-full md:h-auto object-contain">
                    </div>
        
                    <div class="flex items-center justify-center flex-1 xl:flex-2 text-content">
                        <div class="mt-8 md:mt-0 flex-col">
                            <h2 class="mt-8 font-bold text-2xl lg:text-4xl">
                                Message from Chairman
                            </h2>
                            <p class="font-secondary text-sm lg:text-lg md:text-base leading-8 lg:leading-10 mt-8">
                                Welcome Friends, 
                                <br>
                                <br>
                                As the Founder and Chairman of SOROK UNI FOUNDATION, INC, I am proud to be a part of a community which aims to emancipate forgotten neighbors in the Philippines from social stigma and lowest level of poverty through...                    
                            </p>
                            <div class="my-12">
                                <x-buttons.secondary>
                                    READ MORE
                                </x-buttons.secondary>
                            </div>
                        </div>
                       
                    </div>
                </div>
        
            </x-layouts.container>
        </div>

    </div>



    <div class="relative">
        <div class="bg-gradient-to-b from-[#00674F] to-[#ffffff]/30 pt-20"> 
            <x-layouts.container>
                <div class="w-full flex flex-col items-center">
                    <div class="text-center md:text-left">
                        <h1 class="font-bold text-4xl lg:text-5xl text-white text-center">
                            What community do we have? 
                        </h1>
                        <p class="mt-8 text-center font-secondary text-sm lg:text-base text-white">
                            Our community is eager to be empowered to live independently and is full of hope for life's advancement. 
                        </p>
                    </div>
                </div>
                <div class="mt-12 mx-auto w-full scroll-section">
            
                    <div class="flex flex-wrap flex-col justify-center">
                        <div class="flex flex-col md:flex-row w-full">
                            <div class="relative border-t-6 rounded-t-xl h-auto border-[#FFC000]">
                                <img src="{{ Vite::asset('public/images/NCR.jpg') }}" loading="lazy" alt="NCR" class="w-full rounded-t-xl h-full object-cover image-content">
                                <div class="absolute inset-0 bg-[#333333] rounded-t-xl opacity-80 flex flex-col py-4 justify-center items-center text-white px-4 text-content">
                                    <h2 class="font-bold text-xl text-center lg:text-3xl text-white">
                                        SOROK NCR
                                    </h2>
                                    <p class="font-secondary xl:px-8 text-xs sm:text-sm lg:text-lg md:text-base text-center mt-2 sm:mt-4 sm:leading-8 md:leading-6 lg:leading-10">
                                        Within the National Capital Region are communities of underprivileged individuals and families in the National Capital Region whose challenges vary from homelessness, leprosy stigma, illiteracy, and mendicancy.
                                    </p>
                                </div>
                            </div>
                            <div class="relative border-t-6 rounded-t-xl h-auto border-[#FFC000]">
                                <img src="{{ Vite::asset('public/images/MIMAROPA.jpg') }}" loading="lazy" alt="MIMAROPA" class="w-full rounded-t-xl h-full object-cover image-content">
                                <div class="absolute inset-0 bg-[#333333] opacity-80 rounded-t-xl flex flex-col py-4 justify-center items-center text-white px-4 text-content">
                                    <h2 class="font-bold text-xl text-center lg:text-3xl text-white">
                                        SOROK MIMAROPA
                                    </h2>
                                    <p class="mt-2 sm:mt-4 xl:px-8 text-center font-secondary text-xs sm:text-sm lg:text-base text-white sm:leading-8 md:leading-6 lg:leading-10">
                                        A community of disadvantaged IP Learners in Sablayan, Occidental Mindoro, provided a Digital Literacy program, to improve the quality of living and social inclusion while promoting the preservation of their culture.
                                    </p>
                                </div>
                            </div>
                        </div>
        
                        <div class="flex flex-col md:flex-row w-full">
                            <div class="relative border-t-6 rounded-t-xl h-auto border-[#FFC000]">
                                <img src="{{ Vite::asset('public/images/R4A.jpg') }}" loading="lazy" alt="Region 4 A" class="w-full rounded-t-xl h-full object-cover image-content">
                                <div class="absolute inset-0 bg-[#333333] opacity-80 rounded-t-xl flex flex-col py-4 justify-center items-center text-white px-4 text-content">
                                    <h2 class="font-bold text-xl text-center lg:text-3xl text-white">
                                        SOROK REGION IV-A
                                    </h2>
                                    <p class="mt-2 sm:mt-4 xl:px-8 text-center font-secondary text-xs sm:text-sm lg:text-base text-white sm:leading-8 md:leading-6 lg:leading-10">
                                        A community of cured persons affected by leprosy and homeless families and individuals being prepared for independent and sustainable living. The community focuses mainly on livelihood projects to provide income for its parent beneficiaries, as well as empower their children through the educational assistance provided under the Sorok Dream Project Scholarship.
                                    </p>
                                </div>
                            </div>
                            <div class="relative border-t-6 border-[#FFC000] h-auto rounded-t-xl">
                                <img src="{{ Vite::asset('public/images/R9.jpg') }}" alt="Region 9"  loading="lazy" class="w-full rounded-t-xl h-full object-cover image-content">
                                <div class="absolute inset-0 bg-[#333333] rounded-t-xl opacity-80 flex flex-col py-4 justify-center items-center text-white px-4 text-content">
                                    <h2 class="font-bold text-xl text-center lg:text-3xl text-white">
                                        SOROK REGION IX
                                    </h2>
                                    <p class="mt-2 sm:mt-4 xl:px-8 text-center font-secondary text-xs sm:text-sm lg:text-base text-white sm:leading-8 md:leading-6 lg:leading-10">
                                        A community of Christian and Muslim persons affected by leprosy and underprivileged children provided with educational assistance under Sorok Dream Project Scholarship. The community also assists Persons Affected by Leprosy (PALs) admitted in the custodial ward of Mindanao Central Sanitarium General Hospital in Pasabolong, Zamboanga City.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </x-layouts.container>

        </div>
       
    </div>

    @if ($programs->isNotEmpty())
        <div class="flex items-center justify-center mt-16 h-full sm:mt-32">
            <x-layouts.container>
                <h1 class="font-bold text-4xl lg:text-5xl text-content mb-8 md:mb-16 text-center">
                    PROGRAMS
                </h1>

                <div class="relative">
                    <div class="swiper swiper-programs px-6 md:px-32 mx-auto">
                        <div class="swiper-wrapper">

                            @foreach ($programs as $program)
                                <livewire:components.card.programs image="{{ $program->image }}" title="{{ $program->title }}" description="{{ $program->description }}" />
                            @endforeach
                        </div>



                        <div class="absolute mt-16 inset-y-0 w-full flex justify-between items-center">
                            <div class="program-button-prev flex items-center justify-center z-5 w-12 h-12 md:w-14 md:h-14 bg-[#00674F] hover:bg-white text-white hover:text-[#00674F] rounded-full shadow-lg cursor-pointer absolute left-0">
                                <i class="material-icons text-5xl font-bold">keyboard_arrow_left</i>
                            </div>
                            <div class="program-button-next flex items-center justify-center z-5 w-12 h-12 md:w-14 md:h-14 bg-[#00674F] hover:bg-white text-white hover:text-[#00674F] rounded-full shadow-lg cursor-pointer absolute right-0">
                                <i class="material-icons text-5xl font-bold">keyboard_arrow_right</i>
                            </div>
                        </div>
                      

                    </div>  
                
                </div>
            </x-layouts.container>
        </div>
    @endif


    @if ($film)
        <div class="flex items-center justify-center mt-24 sm:mt-32 scroll-section">
            <x-layouts.container>
                <div class="flex flex-col items-center">
                    <h1 class="font-bold text-4xl lg:text-5xl text-content mb-8 md:mb-24 text-center">
                        {{ $filmTitle }}
                    </h1>
        
                    <div class="w-full h-[40vh] sm:h-[55vh] md:h-[65vh] image-content">
                        <div class="aspect-w-16 aspect-h-9 h-full">
                            <iframe
                                class="w-full h-full rounded-lg shadow-lg"
                                src="https://www.youtube.com/embed/{{ $filmEmbedId }}?autoplay=1&mute=1"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </x-layouts.container>
        </div>
    @endif
    






</div>

