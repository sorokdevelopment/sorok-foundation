<x-layouts.app>
    <div class="relative w-full h-[30vh] md:h-[50vh] xl:h-[70vh] bg-[#333333]">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/program-banner.png') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                PROGRAMS AND SERVICES
            </h1>
        </div>
    </div>

    

    <x-layouts.container>
        
        <livewire:programs.index />

        <div class="mt-20">
            <h1 class="text-center font-bold text-3xl md:text-4xl lg:text-5xl">
                SOROK COMMUNITIES
            </h1>
            <div class="py-12 mt-12 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 scroll-section">
                
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
