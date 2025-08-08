<x-layouts.app>
    <!-- Hero Section -->
    <div class="relative w-full h-screen bg-gradient-to-br from-[#00674F] via-[#004D3B] to-[#002D24] overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/3 w-32 h-32 bg-white/5 rounded-full blur-2xl animate-bounce"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 flex items-center justify-center h-full text-white text-center px-4">
            <div class="max-w-6xl mx-auto">
                <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 md:p-12 lg:p-16 max-w-4xl mx-auto">
                    <div class="mb-8 animate-bounce">
                        <svg class="w-20 h-20 mx-auto text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/>
                        </svg>
                    </div>
                    
                    <h1 class="font-bold text-4xl md:text-6xl lg:text-7xl mb-6">
                        Dream for <span class="bg-gradient-to-r from-emerald-400 to-green-300 bg-clip-text text-transparent">Scholarship</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl lg:text-3xl font-light leading-relaxed mb-8 text-emerald-100">
                        Empowering brilliant minds to achieve their educational dreams and transform communities
                    </p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-6 mt-12">
                        <button class="bg-white text-[#00674F] px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-emerald-50 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                            Apply Now
                        </button>
                        <button class="border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-white/10 transition-all duration-300">
                            Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60">
            <div class="flex flex-col items-center">
                <span class="text-sm mb-2">Scroll to explore</span>
                <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="py-20 lg:py-32 bg-gradient-to-b from-gray-50 to-white">
        <x-layouts.container>
            <div class="mx-auto px-4">
                
                <!-- Section Header -->
                <div class="text-center mb-20">
                    <h2 class="font-bold text-4xl lg:text-6xl text-gray-900 mb-8">
                        Scholarship <span class="bg-gradient-to-r from-[#00674F] to-emerald-500 bg-clip-text text-transparent">Programs</span>
                    </h2>
                    <p class="text-xl lg:text-2xl text-gray-600 leading-relaxed max-w-4xl mx-auto">
                        Choose from our carefully designed scholarship programs that cater to different educational needs and career aspirations
                    </p>
                </div>

                <!-- Scholarship Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                    
                    <!-- Academic Excellence Scholarship -->
                    <div class="bg-gradient-to-br from-white to-gray-50 border border-[#00674F]/10 rounded-3xl p-8 lg:p-12 hover:shadow-2xl hover:-translate-y-3 hover:scale-[1.02] transition-all duration-500 group relative overflow-hidden">
                        <!-- Hover effect overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-[#00674F]/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                        
                        <div class="relative z-10">
                            <!-- Header -->
                            <div class="flex items-center justify-between mb-8">
                                <div class="bg-gradient-to-r from-[#00674F] to-emerald-600 p-4 rounded-2xl shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9.5 14.25l-5.584 2.718a1 1 0 01-1.316-1.316L5.318 9.5 2.6 4.934a1 1 0 011.316-1.316L9.5 6.336l5.584-2.718a1 1 0 011.316 1.316L13.682 9.5l2.718 5.566a1 1 0 01-1.316 1.316L9.5 14.25z"/>
                                    </svg>
                                </div>
                                <span class="bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full text-sm font-semibold">
                                    Merit-Based
                                </span>
                            </div>
                            
                            <h3 class="font-bold text-2xl lg:text-3xl text-gray-900 mb-6">
                                Academic Excellence Scholarship
                            </h3>
                            
                            <blockquote class="italic text-[#00674F] bg-[#00674F]/10 p-6 rounded-2xl mb-8 border-l-4 border-[#00674F] relative">
                                <svg class="absolute top-4 left-4 w-6 h-6 text-[#00674F]/30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                </svg>
                                <p class="ml-8">"Excellence is not a destination, but a journey of continuous learning and growth."</p>
                            </blockquote>
                            
                            <div class="space-y-6 mb-8">
                                <p class="text-gray-700 leading-relaxed text-lg">
                                    Designed for outstanding students who have demonstrated exceptional academic performance and show great promise for future achievements in their chosen field of study.
                                </p>
                                <p class="text-gray-700 leading-relaxed text-lg">
                                    Perfect for high-achieving students who want to pursue undergraduate or graduate studies at top-tier universities while maintaining their academic excellence.
                                </p>
                            </div>
                            
                            <!-- Features -->
                            <div class="space-y-4 mb-10">
                                <div class="flex items-center text-gray-700 bg-emerald-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-[#00674F] mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">Full tuition coverage for 4 years</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-emerald-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-[#00674F] mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">Monthly living stipend of ₱25,000</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-emerald-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-[#00674F] mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">Books and materials allowance</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-emerald-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-[#00674F] mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">Mentorship program access</span>
                                </div>
                            </div>
                            
                            <button class="w-full bg-gradient-to-r from-[#00674F] to-emerald-700 text-white py-4 rounded-2xl font-semibold text-lg hover:from-emerald-700 hover:to-[#00674F] transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-2xl">
                                Apply for Academic Excellence
                            </button>
                        </div>
                    </div>

                    <!-- Community Impact Scholarship -->
                    <div class="bg-gradient-to-br from-white to-gray-50 border border-blue-500/10 rounded-3xl p-8 lg:p-12 hover:shadow-2xl hover:-translate-y-3 hover:scale-[1.02] transition-all duration-500 group relative overflow-hidden">
                        <!-- Hover effect overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/5 to-sky-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                        
                        <div class="relative z-10">
                            <!-- Header -->
                            <div class="flex items-center justify-between mb-8">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4 rounded-2xl shadow-lg">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zM4 18v-4.8L2 13l.94-2.07L8 14l8.41-4.16L20 14v4h-7v-2.26L8.41 14.5 4 16.24V18H2v2h2c1.1 0 2-.9 2-2h8c0 1.1.9 2 2 2h2v-2h-2v-4l-4-2-8.41 4.16L4 18z"/>
                                    </svg>
                                </div>
                                <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold">
                                    Impact-Focused
                                </span>
                            </div>
                            
                            <h3 class="font-bold text-2xl lg:text-3xl text-gray-900 mb-6">
                                Community Impact Scholarship
                            </h3>
                            
                            <blockquote class="italic text-blue-700 bg-blue-50 p-6 rounded-2xl mb-8 border-l-4 border-blue-500 relative">
                                <svg class="absolute top-4 left-4 w-6 h-6 text-blue-500/30" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                                </svg>
                                <p class="ml-8">"Be the change you wish to see in your community and inspire others to follow."</p>
                            </blockquote>
                            
                            <div class="space-y-6 mb-8">
                                <p class="text-gray-700 leading-relaxed text-lg">
                                    For passionate individuals who have demonstrated leadership in community service and are committed to creating positive social change through their education and career.
                                </p>
                                <p class="text-gray-700 leading-relaxed text-lg">
                                    Ideal for students pursuing degrees in social work, education, public health, environmental science, or other fields focused on community development.
                                </p>
                            </div>
                            
                            <!-- Features -->
                            <div class="space-y-4 mb-10">
                                <div class="flex items-center text-gray-700 bg-blue-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-blue-500 mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">75% tuition support for 4 years</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-blue-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-blue-500 mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">Project funding up to ₱50,000</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-blue-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-blue-500 mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">Leadership development workshops</span>
                                </div>
                                <div class="flex items-center text-gray-700 bg-blue-50 p-3 rounded-xl">
                                    <svg class="w-6 h-6 text-blue-500 mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                    </svg>
                                    <span class="font-medium">NGO partnership opportunities</span>
                                </div>
                            </div>
                            
                            <button class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 rounded-2xl font-semibold text-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-2xl">
                                Apply for Community Impact
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </x-layouts.container>
    </div>

    <!-- Call to Action Section -->
    <div class="py-20 bg-gradient-to-r from-[#00674F] via-emerald-700 to-[#00674F] relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-10 left-1/4 w-48 h-48 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-10 right-1/4 w-64 h-64 bg-emerald-400/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
            <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-8 md:p-12">
                <h2 class="font-bold text-3xl lg:text-5xl text-white mb-6">
                    Ready to Transform Your Future?
                </h2>
                <p class="text-xl lg:text-2xl text-emerald-100 leading-relaxed mb-10">
                    Join thousands of scholars who are making a difference in their communities and building a better tomorrow.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <button class="bg-white text-[#00674F] px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-emerald-50 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        Start Your Application
                    </button>
                    <button class="border-2 border-white/30 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-white/10 transition-all duration-300">
                        Contact Our Team
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>