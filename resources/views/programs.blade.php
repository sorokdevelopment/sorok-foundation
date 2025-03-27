<x-layouts.app>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333]">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ Vite::asset('public/images/program-banner.png') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl">
                PROGRAMS AND SERVICES
            </h1>
        </div>
    </div>

    <x-layouts.container>
        <div class="py-12 mt-12 space-y-20 w-full flex flex-col justify-center items-center">
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl">
                PROGRAMS
            </h1>
            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2">
                <img src="{{ Vite::asset('public/images/program-1.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg  lg:text-xl text-primary">
                        UNI (YOU AND I) FOR PALs 
                        <span class="block">(PERSONS AFFECTED BY LEPROSY)</span>
                                            
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        This health assistance program aims to support PALs in custodial wards, cured leprosy
                        patients with other medical conditions, and individuals suspected of having leprosy or
                        diagnosed with active leprosy who require medication assistance.
                    </p>
                </div>
            </div>


            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2 md:grid-flow-dense">
                <img src="{{ Vite::asset('public/images/program-2.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center md:col-start-2 lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full md:col-start-1 justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg md:text-xl lg:text-2xl text-primary">
                        PROJECT NEW LIFE                
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        This poverty-reduction assistance program aims to help PALs and families and individuals
                        living in the streets to achieve independent and sustainable living by providing temporary
                        housing and financial aid. It also seeks to prepare them for better job opportunities through
                        providing livelihood trainings within Sorok Uni Village.
                    </p>
                </div>
            </div>


            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2">
                <img src="{{ Vite::asset('public/images/program-3.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg md:text-xl lg:text-2xl text-primary">
                        SOROK ADOPT-A-SCHOOL                 
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        The Sorok Adopt-A-School program aims to support elementary public schools with high
                        rate of undernourished pupils and/or low completion rate by providing school supplies
                        assistance and/or feeding undernourished pupils. Adopted schools undergo screening and assessment by social workers to identify their specific needs-needs that the government
                        may not fully address but that the foundation can help augment.
                    </p>
                </div>
            </div>


            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2 md:grid-flow-dense">
                <img src="{{ Vite::asset('public/images/program-4.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center md:col-start-2 lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full md:col-start-1 justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg md:text-xl lg:text-2xl text-primary">
                        EARLY CHILDHOOD CARE AND DEVELOPMENT                
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        This program provides free early childhood education in areas where children are
                        predominantly undernourished and underprivileged. It also emphasizes the importance of
                        instilling good character and values from an early age, helping children grow into
                        responsible individuals who contribute meaningfully to nation-building.
                    </p>
                </div>
            </div>



            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2">
                <img src="{{ Vite::asset('public/images/program-5.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg md:text-xl lg:text-2xl text-primary">
                        SOROK DREAM PROJECT                
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        This scholarship program aims to holistically empower qualified underprivileged scholars
                        by providing quality education, health assistance, nutrition support, and spiritual
                        development. It opens doors to better career opportunities, helping break the cycle of
                        intergenerational poverty.
                    </p>
                </div>
            </div>



            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2 md:grid-flow-dense">
                <img src="{{ Vite::asset('public/images/program-6.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center md:col-start-2 lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full md:col-start-1 justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg md:text-xl lg:text-2xl text-primary">
                        DIGITAL LITERACY                    
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        This program provides free early childhood education in areas where children are
                        predominantly undernourished and underprivileged. It also emphasizes the importance of
                        instilling good character and values from an early age, helping children grow into
                        responsible individuals who contribute meaningfully to nation-building.
                    </p>
                </div>
            </div>


            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2">
                <img src="{{ Vite::asset('public/images/program-7.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg md:text-xl lg:text-2xl text-primary">
                        RISE OF OSAEC SURVIVORS               
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        This independent living program supports OSAEC survivors without safe families in the
                        National Capital Region (NCR). Its primary goal is to restore their dignity and facilitate their
                        successful reintegration into society. The program provides essential social services,
                        including a transitional living facility, life skills and capacity-building programs, educational
                        assistance, and an Anti-OSAEC awareness campaign.
                    </p>
                </div>
            </div>


            <div class="grid w-full items-center mx-auto gap-8 md:gap-12 md:grid-cols-2 md:grid-flow-dense">
                <img src="{{ Vite::asset('public/images/program-8.png') }}" 
                        alt="Program Image" 
                        class="w-full flex justify-center md:col-start-2 lg:w-[80%] rounded-lg object-cover shadow-lg">
                <div class="flex flex-col items-center md:items-start h-full md:col-start-1 justify-center space-y-8">
                    <h1 class="text-center md:text-start font-bold text-lg md:text-xl lg:text-2xl text-primary">
                        PROJECT I CAN 
                        <span class="block">(PERSONS WITH DISABILITY)</span>               
                    </h1>
                    
                    <p class="font-secondary text-sm lg:text-lg leading-8">
                        This community-based empowerment initiative supports children and youth with
                        disabilities (CYD) from low-income families in Manila City. It is implemented through a
                        partnership between Sorok Uni Foundation and Kaisahan ng Mga Magulang at Anak na May
                        Kapansanan (KAISAKA INC.).
                    </p>
                </div>
            </div>

        </div>

        <div class="mt-20">
            <h1 class="text-center font-bold text-3xl md:text-4xl lg:text-5xl">
                SOROK COMMUNITIES
            </h1>
            <div class="py-12 mt-12 w-full grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <livewire:components.card.communities 
                    key="communities-1"
                    title="SOROK NCR"
                    imgName="program-1.png"
                    description="
                        Within the National Capital Region are communities of underprivileged individuals and
                        families in the National Capital Region whose challenges vary from homelessness, leprosy
                        stigma, illiteracy, and mendicancy."
                />
                <livewire:components.card.communities 
                    key="communities-2"
                    title="SOROK REGION IV-A"
                    imgName="program-2.png"
                    description="
                        A community of cured persons affected by leprosy and homeless families and individuals
                        being prepared for independent and sustainable living. The community focuses mainly on
                        livelihood projects to provide income for its parent beneficiaries, as well as empower their
                        children through the educational assistance provided under the Sorok Dream Project Scholarship."
                />
                <livewire:components.card.communities
                    key="communities-3"
                    title="SOROK MIMAROPA"
                    imgName="program-3.png"
                    description="
                        A community of disadvantaged IP Learners in Sablayan, Occidental Mindoro, provided a
                        Digital Literacy program, to improve the quality of living and social inclusion while promoting
                        the preservation of their culture."
                />
    
                <livewire:components.card.communities 
                    key="communities-4"
                    title="SOROK REGION IX"
                    imgName="program-4.png"
                    description="
                        A community of Christian and Muslim persons affected by leprosy and underprivileged
                        children provided with educational assistance under Sorok Dream Project Scholarship. The
                        community also assists Persons Affected by Leprosy (PALs) admitted in the custodial ward
                        of Mindanao Central Sanitarium General Hospital in Pasabolong, Zamboanga City."
                />
            </div>
        </div>
       
    </x-layouts.container>

    
</x-layouts.app>
