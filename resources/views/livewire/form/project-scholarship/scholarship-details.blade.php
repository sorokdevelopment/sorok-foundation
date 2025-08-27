<div>
    <div class="relative justify-end flex items-center mx-auto p-4 py-24 h-full">
        <div class="w-full my-12 mx-auto flex flex-col justify-center items-center gap-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-[#00674F]/10 px-4 py-2 rounded-full mb-6">
                    <div class="w-2 h-2 bg-[#00674F] rounded-full"></div>
                    <span class="text-sm font-medium text-[#00674F] uppercase tracking-wide">Choose Your Impact</span>
                </div>
            
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Become a <span class=" text-[#00C897] bg-clip-text">Scholar Sponsor</span>
                </h1>
                
                <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto">
                    Every contribution matters. Select the scholar level that aligns with your commitment to education and community development.
                </p>
            </div>

            <!-- Champion Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Faith Champion Card -->
                <div class="group bg-white rounded-2xl border-2 border-gray-200 hover:border-[#00674F] transition-all duration-300 hover:shadow-xl">
                    <div class="p-8 lg:p-10">
                        <!-- Icon -->
                        <div class="w-14 h-14 bg-[#00674F]/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-[#00674F] group-hover:scale-105 transition-all duration-300">
                            <svg class="w-7 h-7 text-[#00674F] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Faith Champion</h3>
                        
                        <div class="bg-[#00674F]/5 border-l-4 border-[#00674F] p-4 rounded-r-lg mb-6">
                            <p class="text-[#00674F] font-medium text-lg italic">
                                "Building hope through faith and education"
                            </p>
                        </div>

                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Join our mission to provide educational opportunities grounded in faith and values. Perfect for individuals who believe in holistic development of Filipino youth.
                        </p>

                        <!-- Benefits -->
                        <div class="space-y-4 mb-8">
                            <h4 class="text-gray-900 font-semibold">Your impact includes:</h4>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#00674F] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600">Quarterly impact reports and testimonials</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#00674F] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600">Student success stories and updates</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#00674F] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600">Community prayer and support network</span>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <button 
                            wire:click="nextStep(2)" 
                            wire:loading.attr="disabled"
                            class="w-full bg-[#00674F] hover:bg-[#004d3a] text-white font-semibold py-4 px-6 rounded-xl transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed hover:shadow-lg hover:-translate-y-0.5">
                            <span wire:loading.remove wire:target="nextStep" class="flex items-center justify-center gap-2">
                                Join Faith Champions
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Dream Champion Card -->
                <div class="group bg-white rounded-2xl border-2 border-gray-200 hover:border-[#00674F] transition-all duration-300 hover:shadow-xl" style="animation-delay: 0.2s;">
                    <div class="p-8 lg:p-10">
                        <!-- Icon -->
                        <div class="w-14 h-14 bg-[#00674F]/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-[#00674F] group-hover:scale-105 transition-all duration-300">
                            <svg class="w-7 h-7 text-[#00674F] group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Dream Champion</h3>
                        
                        <div class="bg-[#00674F]/5 border-l-4 border-[#00674F] p-4 rounded-r-lg mb-6">
                            <p class="text-[#00674F] font-medium text-lg italic">
                                "Turning dreams into reality through action"
                            </p>
                        </div>

                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Take active leadership in transforming lives. Ideal for professionals and advocates ready to make a significant impact through both support and direct involvement.
                        </p>

                        <!-- Benefits -->
                        <div class="space-y-4 mb-8">
                            <h4 class="text-gray-900 font-semibold">Your impact includes:</h4>
                            <div class="space-y-3">
                                <div class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#00674F] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600">Direct volunteer and mentorship opportunities</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#00674F] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600">Leadership development programs</span>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-[#00674F] rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600">Priority access to community initiatives</span>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <button 
                            wire:click="nextStep(1)" 
                            wire:loading.attr="disabled"
                            class="w-full bg-[#00674F] hover:bg-[#004d3a] text-white font-semibold py-4 px-6 rounded-xl transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed hover:shadow-lg hover:-translate-y-0.5">
                            <span wire:loading.remove wire:target="nextStep" class="flex items-center justify-center gap-2">
                                Join Dream Champions
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
