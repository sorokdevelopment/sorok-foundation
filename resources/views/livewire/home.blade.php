<div>
    <div id="hero" class="relative w-full">
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover" loading="lazy">
            <source src="{{ asset('images/videos/hero-bg.mp4') }}" type="video/mp4">
        </video>
        
        <div class="relative justify-end flex items-center mx-auto p-4 py-24 h-full">
            <div class="w-full my-12 mx-auto flex flex-col justify-center items-center gap-8">
                <x-layouts.container>

                    <livewire:form.champion-form />
                </x-layouts.container>

            </div>
        </div>
    </div>


    <div class="mt-24 md:mt-32 scroll-section">
        <x-layouts.container>
            <div class="grid lg:grid-cols-2 gap-14 items-start">
                <div>
                    <h2 class="mb-6 font-bold text-2xl md:text-3xl lg:text-4xl">
                        Our Accreditations
                    </h2>
                    <p class="font-secondary text-base md:text-lg lg:text-xl leading-8 lg:leading-10 mb-8 ">
                        Trusted. Transparent. Impactful.
                    </p>
    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="text-primary mt-1">
                                <i class="fa-solid fa-circle-check text-primary text-2xl"></i>    
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg">Government Certified</h4>
                                <p class=" mt-2">
                                    We meet national standards and follow all required regulations.
                                </p>
                            </div>
                        </div>
                    
                        <div class="flex items-start gap-4">
                            <div class="text-primary mt-1">
                                <i class="fa-solid fa-users text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg">Official Network Partner</h4>
                                <p class=" mt-2">
                                    We work with trusted groups to improve our programs.
                                </p>
                            </div>
                        </div>
                    
                        <div class="flex items-start gap-4">
                            <div class="text-primary mt-1">
                                <i class="fa-solid fa-eye text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg">Transparent Operations</h4>
                                <p class=" mt-2">
                                    We value honestly and openness in everything we do.
                                </p>
                            </div>
                        </div>
                    
                        <div class="flex items-start gap-4">
                            <div class="text-primary mt-1">
                                <i class="fa-solid fa-hand-holding-heart text-primary text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg">Proven Community Impact</h4>
                                <p class=" mt-2">
                                    Recognized for creating real, positive change in the lives we serve.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2  gap-6 w-full">
                    <div class="rounded-lg p-6 space-y-4 text-center">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('images/dswd.png') }}" alt="DSWD Logo" class="w-2/3 sm:w-full lg:w-full">
                        </div>
                        
                        
                        <div class="flex flex-wrap space-y-2 space-x-2 justify-center items-center">
                            {{-- <span class="px-4 py-2 block text-xs font-semibold text-primary">
                                DSWD-SB-R-000131-2021
                            </span>
                            <span class="px-4 py-2 block text-xs font-semibold text-primary">
                                DSWD-SB-L-000100-2021
                            </span>
                            <span class="px-4 py-2 block text-xs font-semibold text-primary">
                                DSWD-SB-A-00099-2022
                            </span> --}}
                        </div>
                    </div>
    
                    <div class="rounded-lg p-6 space-y-4 text-center">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('images/pcnc.png') }}" alt="PCNC Logo" class="w-2/3  sm:w-full lg:w-full">
                        </div>

                        {{-- <span class="px-4 py-2 block text-xs font-semibold text-primary">
                            CERTIFATE #. 2023062867
                        </span> --}}
                    </div>
    
                    <div class="rounded-lg p-6 space-y-4 text-center">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('images/absnet.jpg') }}" alt="ABSNET Logo" class="w-1/2  sm:w-2/3 lg:w-full 2xl:w-2/3">
                        </div>
                    </div>
                    <div class="rounded-lg p-6 space-y-4 text-center">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('images/ijm.png') }}" alt="IJM Logo" class="w-1/2  sm:w-2/3 lg:w-full 2xl:w-1/2">
                        </div>
                    </div>
                </div>
            </div>
        </x-layouts.container>
    </div>
    


    
    <div class="mt-24 md:mt-32 bg-[#00674F] py-20 scroll-section">
        <x-layouts.container>
            <div class="mx-auto text-center mb-16 px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Joining the Champions for Change
                </h2>
                <p class="text-lg text-white/90">
                    Follow these simple steps to become part of our movement and create lasting impact.
                </p>
            </div>

            <div class="relative">
                <div class="hidden 2xl:block absolute top-16 left-1/2 h-1 w-full max-w-4xl bg-white/20 transform -translate-x-1/2">
                    <div class="h-full bg-white transition-all duration-500" style="width: 100%"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-6 relative z-10 px-4">
                    <div class="group">
                        <div class="h-full bg-white rounded-xl px-2 py-6 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                            <div class="relative mb-6">
                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-[#00674F] rounded-full flex items-center justify-center text-xl font-bold text-white border-4 border-white">
                                    1
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-semibold mb-4 text-center">Choose Membership Tier</h3>
                            <p class="mb-4 text-center leading-relaxed">
                                Select your commitment level:
                            </p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 leading-relaxed 2xl:grid-cols-1 gap-4">
                                <div class="px-3 py-2 bg-[#00674F]/10 rounded-lg">
                                    {{-- <p class="font-medium text-primary text-center">₱100/month</p> --}}
                                    <p class="text-sm font-semibold text-primary text-center uppercase">Awareness</p>
                                </div>
                                <div class="px-3 py-2 bg-[#00674F]/10 rounded-lg">
                                    {{-- <p class="font-medium text-primary text-center">₱1,000/month</p> --}}
                                    <p class="text-sm font-semibold text-primary text-center uppercase">Empowerment</p>
                                </div>
                                <div class="px-3 py-2 bg-[#00674F]/10 rounded-lg">
                                    {{-- <p class="font-semibold text-primary text-center">₱10,000/month</p> --}}
                                    <p class="text-sm font-semibold text-primary text-center uppercase">Sustainability</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="h-full bg-white rounded-xl px-2 py-6 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                            <div class="relative mb-6">
                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-[#00674F] rounded-full flex items-center justify-center text-xl font-bold text-white border-4 border-white">
                                    2
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-semibold mb-4 text-center">Sign Up Online</h3>
                            <p class="mb-4 text-center">
                                Navigate to the Champions for Change section, and click <span class="font-bold">"Join Now"</span>. Fill out the registration form with your name, contact details, and payment information.
                            </p>
                            
                            <div class="flex justify-center items-center">
                                <a href="https://www.sorokuni.com">
                                    <x-buttons.primary>
                                        Register Now
                                    </x-buttons.primary>
                                </a>
                            </div>
                            
                            
                            
                        </div>
                    </div>

                    <div class="group">
                        <div class="h-full bg-white rounded-xl px-2 py-6 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                            <div class="relative mb-6">
                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-[#00674F] rounded-full flex items-center justify-center text-xl font-bold text-white border-4 border-white">
                                    3
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-semibold mb-4 text-center">Set Up Donation</h3>
                            <p class="leading-relaxed text-center">
                                Choose a payment method (Credit/Debit Card, Online Banking, or E-Wallet) and enable auto-debit for convenience to ensure your monthly contribution continues automatically.
                            </p>
                            <div class="flex justify-center items-center flex-wrap mt-6 gap-4">
                                <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-credit-card"></i>
                                    <span class="ml-1 text-xs font-medium">Cards</span>
                                </div>
                                
                                <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg  flex items-center justify-center">
                                    <i class="fa-solid fa-wallet"></i>
                                    <span class="ml-1 text-xs font-medium">E-wallet</span>
                                </div>
                                
                                <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-building-columns"></i>
                                    <span class="ml-1 text-xs font-medium">Online</span>
                                </div>
                                
                                <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg flex items-center justify-center">
                                    <i class="fa-brands fa-cc-visa"></i>
                                    <span class="ml-1 text-xs font-medium">Visa</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="group">
                        <div class="h-full bg-white rounded-xl px-2 py-6 sm:p-6 shadow-md hover:shadow-lg transition-all duration-300">
                            <div class="relative mb-6">
                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-[#00674F] rounded-full flex items-center justify-center text-xl font-bold text-white border-4 border-white">
                                    4
                                </div>
                            </div>
                            
                            <h3 class="text-xl font-semibold mb-4 text-center">Make an Impact</h3>
                            <p class="leading-relaxed text-center">
                                Join the Champions community, participate in events and webinars, and spread awareness using 
                                <span class="inline-flex items-center text-xs sm:text-sm px-2 py-1 my-1 bg-white border border-[#00674F] text-primary rounded-lg font-medium">
                                    #SorokUniChampionForChangePH
                                </span>
                                to invite others to join the movement
                            </p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>

        </x-layouts.container>
    </div>

    
    

    <div x-cloak class="mt-24 md:mt-32 flex flex-col md:flex-row relative scroll-section">
        <x-layouts.container>
            <div class="flex flex-col md:flex-row md:space-x-12">
                <div class="flex flex-1 relative image-content">
                    <img src="{{ asset('images/home-banner-s2.png') }}" 
                        alt="Section 2 Banner" 
                        loading="lazy"
                        class="w-full sm:h-96 sm:object-cover md:object-contain md:h-auto object-contain">
                </div>
    
                <div class="flex items-center justify-center flex-1 xl:flex-2 text-content">
                    <div class="mt-8 md:mt-0 flex-col">
                        <h2 class="mt-8 font-bold text-2xl lg:text-4xl">
                            ABOUT US 
                        </h2>
                        <div x-data="{ expanded: false }">
                            <p class="font-secondary text-base md:text-lg lg:text-xl leading-8 lg:leading-10 mt-8"
                               x-ref="textContent"
                               :class="{ 'line-clamp-3': !expanded }">
                               Sorok Uni Foundation Inc. is a non-profit organization for change that works for and with: Persons Affected by Leprosy (PALs), Individuals and Families in Street Situations, Underprivileged Children, Disadvantaged Indigenous Peoples, Online Sexually Abused and Exploited Children (OSAEC) and Persons with Disability (PWDs). We help the above mentioned marginalized sectors in the Philippines through facilitating their empowerment as individuals and communities and by advancing their interests as a group. Our ways of helping are designed to capacitate fellow Filipinos to help themselves and become significant contributors to nation-building of the Philippines. This is aligned with our vision of having A PHILIPPINES WITHOUT FORGOTTEN NEIGHBORS.                    
                            </p>
                            <button @click="expanded = !expanded" 
                                class="mt-2 text-primary font-semibold hover:underline focus:outline-none flex items-center">
                                <span x-text="expanded ? 'Show Less' : 'Show More'"></span>
                                <i class="fa-solid fa-chevron-down ml-2 text-sm transition-transform duration-200" 
                                :class="{ 'rotate-180': expanded }"></i>
                            </button>
                        </div>

                        <div class="mt-12">
                            <a href="{{ route('about') }}">
                                <x-buttons.primary>
                                    READ MORE
                                </x-buttons.primary>
                            </a>
                        </div>
                        <div class="mt-16 xl:w-2/3">
                            <div class="border-t-4 border-[#00674F] lg:border-l-6 lg:border-t-0 bg-white px-8 py-6 lg:rounded-e-lg shadow-lg">
                                <div class="py-6 space-y-6 flex flex-col items-center">
                                    <h2 class="text-center font-bold text-xl">
                                        Interested? Send us a message
                                    </h2>
                                    <div class="flex justify-center items-center space-x-4">
                                        <i class="material-icons mr-2 text-2xl fill-current opacity-80">mail</i>
                                        <p class="text-primary font-medium text-base md:text-lg lg:text-xl leading-relaxed font-secondary">
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
    
    
    <div x-cloak class="mt-24 md:mt-32 scroll-section">
        <div class="flex flex-col md:flex-row relative">
            <x-layouts.container class="relative">
                <div class="flex flex-col md:flex-row md:space-x-12">
                    <div class="flex flex-1 relative image-content">
                        <img src="{{ asset('images/home-chairman.png') }}" 
                                alt="Chairman Banner" 
                                loading="lazy"
                                class="w-full md:h-auto object-contain">
                    </div>
        
                    <div class="flex items-center justify-center flex-1 xl:flex-2 text-content" x-data="{ expanded: false }">
                        <div class="mt-8 md:mt-0 flex-col">
                            <h2 class="mt-8 font-bold text-2xl lg:text-4xl">
                                Message from Chairman
                            </h2>
                            <p class="font-secondary text-base md:text-lg lg:text-xl leading-8 lg:leading-10 mt-8"
                                x-ref="textContent"
                                :class="{ 'line-clamp-5': !expanded }">
                                Welcome Friends, 
                                <br>
                                <br>
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

                            <button @click="expanded = !expanded" 
                                class="mt-2 text-primary font-semibold hover:underline focus:outline-none flex items-center">
                                <span x-text="expanded ? 'Show Less' : 'Show More'"></span>
                                <i class="fa-solid fa-chevron-down ml-2 text-sm transition-transform duration-200" 
                                :class="{ 'rotate-180': expanded }"></i>
                            </button>
                            <div class="my-12">
                                <a href="{{ route('chairman-corner') }}">

                                    <x-buttons.primary>
                                        READ MORE
                                    </x-buttons.primary>
                                </a>
                            </div>
                        </div>
                       
                    </div>
                </div>
        
            </x-layouts.container>
        </div>

    </div>



    <div x-cloak class="relative">
        <div class="bg-gradient-to-b from-[#00674F] to-[#ffffff]/30 pt-20"> 
            <x-layouts.container>
                <div class="w-full flex flex-col items-center">
                    <div class="text-center md:text-left">
                        <h1 class="font-bold text-4xl lg:text-5xl text-white text-center">
                            What community do we have? 
                        </h1>
                        <p class="mt-8 text-center font-secondary text-base md:text-lg lg:text-xl leading-relaxed text-white">
                            Our community is eager to be empowered to live independently and is full of hope for life's advancement. 
                        </p>
                    </div>
                </div>
                <div class="mt-12 mx-auto w-full scroll-section">
            
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @php
                            $regions = [
                                [
                                    'title' => 'SOROK NCR',
                                    'image' => 'images/NCR.jpg',
                                    'desc' => 'Within the National Capital Region are communities of underprivileged individuals and families whose challenges vary from homelessness, leprosy stigma, illiteracy, and mendicancy.',
                                ],
                                [
                                    'title' => 'SOROK MIMAROPA',
                                    'image' => 'images/MIMAROPA.jpg',
                                    'desc' => 'A community of disadvantaged IP Learners in Sablayan, Occidental Mindoro, provided a Digital Literacy program to improve the quality of living and social inclusion while preserving their culture.',
                                ],
                                [
                                    'title' => 'SOROK REGION IV-A',
                                    'image' => 'images/R4A.jpg',
                                    'desc' => 'A community of cured persons affected by leprosy and homeless families prepared for sustainable living. Focuses on livelihood and educational support through the Sorok Dream Project Scholarship.',
                                ],
                                [
                                    'title' => 'SOROK REGION IX',
                                    'image' => 'images/R9.jpg',
                                    'desc' => 'A community of Christian and Muslim persons affected by leprosy and underprivileged children supported with education, and assistance for PALs in Zamboanga City hospital.',
                                ],
                            ];
                        @endphp
                    
                        @foreach ($regions as $region)
                            <div class="relative w-full h-80 md:h-96 overflow-hidden rounded-lg border-t-4 border-[#00674F]">
                                <img src="{{ asset($region['image']) }}" alt="{{ $region['title'] }}"
                                    loading="lazy"
                                    class="w-full h-full object-cover" />
                    
                                <div class="absolute inset-0 bg-[#333333]/80 flex flex-col justify-center items-center text-white px-4 py-6 text-center">
                                    <h2 class="font-bold text-xl md:text-2xl lg:text-3xl">{{ $region['title'] }}</h2>
                                    <p class="mt-4 text-sm sm:text-base md:text-lg leading-relaxed max-w-xl">
                                        {{ $region['desc'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
            
                </div>
            </x-layouts.container>

        </div>
       
    </div>

    @if ($programs->isNotEmpty())
        <div x-cloak class="flex items-center justify-center mt-16 h-full">
            <x-layouts.container>
                <h1 class="font-bold text-4xl lg:text-5xl text-content mb-8 md:mb-16 text-center">
                    PROGRAMS AND SOCIAL SERVICES
                </h1>

                <div class="relative">
                    <div class="swiper swiper-programs px-6 md:px-32 mx-auto">
                        <div class="swiper-wrapper">

                            @foreach ($programs as $program)
                                <livewire:components.card.programs key="{{ $program->id }}" image="{{ $program->image }}" title="{{ $program->title }}" description="{{ $program->description }}" />
                            @endforeach
                        </div>



                        <div class="absolute mt-16 inset-y-0 w-full flex justify-between items-center">
                            <div class="program-button-prev flex items-center justify-center z-5 w-12 h-12 md:w-14 md:h-14 bg-[#00674F] text-white hover:text-primary rounded-full shadow-lg cursor-pointer absolute left-0">
                                <i class="material-icons text-5xl font-bold">keyboard_arrow_left</i>
                            </div>
                            <div class="program-button-next flex items-center justify-center z-5 w-12 h-12 md:w-14 md:h-14 bg-[#00674F] text-white hover:text-primary rounded-full shadow-lg cursor-pointer absolute right-0">
                                <i class="material-icons text-5xl font-bold">keyboard_arrow_right</i>
                            </div>
                        </div>
                      

                    </div>  
                
                </div>
            </x-layouts.container>
        </div>
    @endif


    @if ($film)
        <div x-cloak class="flex items-center justify-center mt-24 md:mt-32 scroll-section">
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

