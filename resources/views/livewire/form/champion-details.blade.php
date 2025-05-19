<div class="w-full bg-gradient-to-br from-[#00674F]/10 to-[#004D38]/20 rounded-2xl backdrop-blur-sm py-16 px-4">
    <div class="max-w-7xl mx-auto flex flex-col items-center gap-12">
        <!-- Heading -->
        <div class="text-center space-y-4">
            <div class="inline-flex items-center gap-2 bg-[#00674F]/20 px-4 py-2 rounded-full mb-2">
                <span class="h-2 w-2 bg-[#00C897] rounded-full animate-pulse"></span>
                <span class="text-sm font-medium text-[#00C897]">Join the Movement</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-white to-[#B3FFE9] bg-clip-text text-transparent leading-tight">
                Become a Champion of Change
            </h1>
            <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto">
                Choose your mission. Fuel transformation. Support local champions creating lasting impact across communities.
            </p>
        </div>

        <!-- Categories -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 w-full sm:px-8">
            <!-- Awareness Champion -->
            <div class="group bg-gradient-to-b from-white/5 to-white/[0.02] hover:from-[#00674F]/30 hover:to-[#00674F]/20 p-6 rounded-xl border border-white/10 hover:border-[#00C897]/30 transition-all duration-300 hover:shadow-[0_10px_30px_-5px_rgba(0,200,151,0.1)] text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#00C897]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-[#00674F] rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-[#00C897] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-white">Awareness Champion</h3>
                    <p class="text-white/70 text-sm mb-6 leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consectetur ducimus asperiores cumque veritatis unde quaerat voluptatibus ratione omnis beatae?
                    </p>
                    <div class="flex items-center justify-center">
                        <x-buttons.primary wire:click="nextStep(1)">Support Awareness</x-buttons.primary>
    
                    </div>
                </div>
            </div>

            <!-- Empowerment Champion -->
            <div class="group bg-gradient-to-b from-white/5 to-white/[0.02] hover:from-[#00674F]/30 hover:to-[#00674F]/20 p-6 rounded-xl border border-white/10 hover:border-[#00C897]/30 transition-all duration-300 hover:shadow-[0_10px_30px_-5px_rgba(0,200,151,0.1)] text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#00C897]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-[#00674F] rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-[#00C897] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-white">Empowerment Champion</h3>
                    <p class="text-white/70 text-sm mb-6 leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa recusandae iure voluptatibus tenetur atque quam!
                    </p>
                    <div class="flex items-center justify-center">

                        <x-buttons.primary wire:click="nextStep(2)">Support Empowerment</x-buttons.primary>
                    </div>
                </div>
            </div>

            <!-- Sustainability Champion -->
            <div class="group bg-gradient-to-b from-white/5 to-white/[0.02] hover:from-[#00674F]/30 hover:to-[#00674F]/20 p-6 rounded-xl border border-white/10 hover:border-[#00C897]/30 transition-all duration-300 hover:shadow-[0_10px_30px_-5px_rgba(0,200,151,0.1)] text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#00C897]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-[#00674F] rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-[#00C897] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-white">Sustainability Champion</h3>
                    <p class="text-white/70 text-sm mb-6 leading-relaxed">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, possimus rerum nobis autem quasi nostrum repellat inventore ipsa. Necessitatibus, expedita.
                    </p>
                    <div class="flex items-center justify-center">

                        <x-buttons.primary wire:click="nextStep(3)">Support Sustainability</x-buttons.primary>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>