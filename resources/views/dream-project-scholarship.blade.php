<x-layouts.app>

    <div class="relative w-full h-[50vh] xl:h-[70vh] bg-[#333333] ">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/about-banner.jpg') }}');">
        </div>
    
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        {{-- <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                CHAMPIONS FOR CHANGE
            </h1>
        </div> --}}
        
        <div class="absolute inset-0 flex items-center justify-center text-white text-center">
            <div class="px-6">
                <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                    DREAM PROJECT SCHOLARSHIP
                </h1>
            </div>
        </div>
    </div>
    
    <div x-data="{ openModal: false }">
        <div class="max-w-4xl mx-auto px-6 py-16">
            <div class="text-center mb-12">
                
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Sponsor A Dream</h2>
                <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                <h3 class="text-xl md:text-2xl text-gray-700 mb-6 font-secondary">Turn a Child's Dream into Reality</h3>
                
                <div class="space-y-4 text-gray-600 leading-relaxed mb-8">
                    <p class="font-secondary">
                        Every child deserves the chance to learn, grow, and dream big. Yet, many children
                        in marginalized communities are held back by poverty, lacking access to quality
                        education and basic support.
                    </p>
                    <p class="font-secondary">
                        Through <strong class="text-primary">Sorok Uni Foundation's Sponsor A Dream Program</strong>, 
                        you can be the bridge that helps them cross from hardship to hope.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <x-buttons.primary @click="openModal = true">
                        Sponsor A Dream
                    </x-buttons.primary>
                    <x-buttons.secondary>
                        <a href="#categories">
                            Learn More
                        </a>
                    </x-buttons.secondary>
                </div>
            </div>
            
        </div>

        <div class="bg-gray-50 py-16">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-4">Why Sponsor A Dream?</h3>
                    <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto font-secondary">
                        Your sponsorship directly supports a child's education, personal growth, and well-being. 
                        It's more than financial help—it's an investment in a brighter future.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-white text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-2">Education Support</h4>
                        <p class="text-gray-600 text-sm font-secondary">Tuition, school supplies, uniforms, allowances</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-heartbeat text-white text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-2">Health & Wellness</h4>
                        <p class="text-gray-600 text-sm font-secondary">Annual medical check-ups and basic needs</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-seedling text-white text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-2">Holistic Development</h4>
                        <p class="text-gray-600 text-sm font-secondary">Capability training, character formation, mentorship</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-comments text-white text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-2">Connection</h4>
                        <p class="text-gray-600 text-sm font-secondary">Progress reports, thank-you letters, and personal updates from your scholar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16" id="categories">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-4">Two Ways to Make a Difference</h3>
                    <div class="w-20 h-1 bg-primary mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="border-2 border-[#00674F] rounded-lg p-8">
                        <div class="text-center">
                            <h4 class="text-2xl font-bold text-primary mb-3">Dream Category</h4>
                            <p class="text-gray-600 mb-4 font-secondary">For high-performing students (90%+ average, Grade 7–College)</p>
                            <div class="text-3xl font-bold text-primary mb-6">₱6,500<span class="text-lg font-normal text-gray-500">/month</span></div>
                        </div>
                        
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                                <span class="text-gray-700 font-secondary">Full scholarship coverage</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                                <span class="text-gray-700 font-secondary">Monthly allowances for school, food, transport, medical, dormitory</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                                <span class="text-gray-700 font-secondary">Annual medical exam & training webinars</span>
                            </li>
                        </ul>
                    </div>

                    <div class="border-2 border-gray-300 rounded-lg p-8">
                        <div class="text-center">
                            <h4 class="text-2xl font-bold text-primary mb-3">Faith Category</h4>
                            <p class="text-gray-600 mb-4 font-secondary">For hardworking students (85–89% average, Grade 1–College)</p>
                            <div class="text-3xl font-bold text-primary mb-6">₱1,500<span class="text-lg font-normal text-gray-500">/month</span></div>
                        </div>
                        
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-gray-400 mr-2"></i>
                                <span class="text-gray-700 font-secondary">Partial scholarship support</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-gray-400 mr-2"></i>
                                <span class="text-gray-700 font-secondary">Monthly school allowances</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-gray-400 mr-2"></i>
                                <span class="text-gray-700 font-secondary">Annual medical exam & training webinars</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 py-16">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-4">What You'll Receive as a Sponsor</h3>
                    <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 font-secondary max-w-3xl mx-auto">
                        We believe in accountability and transparency. As a valued sponsor, you'll receive:
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">Monthly e-newsletters from Sorok Uni Foundation</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">Bi-annual Scholar Progress Reports</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">Annual Impact Report Video</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">Copy of your scholar's report card</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">Heartfelt thank-you letters from your scholar</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">Monthly official receipts for your contributions</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">A Certificate of Appreciation signed by our leaders</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-circle-check text-primary mr-2"></i>
                        <span class="text-gray-700 font-secondary">Recognition in our official social media and livestreams</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-16">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-4">How Sponsorship Works</h3>
                    <div class="w-20 h-1 bg-primary mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Get in Touch</h4>
                        <p class="text-gray-600 text-sm">Message us on Facebook or email fcd@sorokuni.com</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Meet Your Scholar</h4>
                        <p class="text-gray-600 text-sm">Receive a confidential child data form for matching</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Commit</h4>
                        <p class="text-gray-600 text-sm">Sign the sponsorship agreement & choose your payment method</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-white">4</span>
                        </div>
                        <h4 class="text-lg font-semibold text-primary mb-3">Stay Connected</h4>
                        <p class="text-gray-600 text-sm">Receive regular updates on your scholar's journey and achievements</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary py-16 text-white">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h3 class="text-3xl md:text-4xl font-bold mb-6">Be Part of a Child's Journey</h3>
                <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
                <p class="text-lg leading-relaxed mb-6">
                    Your monthly commitment is more than just financial aid—it's a lifeline. With your help, a child can stay in school, dream bigger, and create a future filled with possibilities.
                </p>
                <p class="text-white/90 mb-8">
                    Together, we can raise a generation of dreamers and achievers.
                </p>
                <div class="flex flex-col sm:flex-row justify-center mt-8 gap-4">
                    <x-buttons.secondary @click="openModal = true">
                        Sponsor A Dream Today
                    </x-buttons.secondary>
                </div>
            </div>
        </div>




        <div 
            class="fixed inset-0 flex items-center justify-center bg-black/70 z-50" 
            x-show="openModal" 
            x-cloak
            @click.self="openModal = false"
            x-transition.opacity
        >

            <div 
                class="relative bg-white rounded-2xl shadow-xl w-full sm:w-5/6 xl:w-1/2 p-2 sm:p-6 z-50"
                x-transition.scale
            >
                <button 
                    @click="openModal = false" 
                    class="absolute -top-4 sm:-top-2 sm:-right-4 right-0 bg-red-500 hover:bg-red-600 rounded-full px-3 py-2 transition"
                >
                    <i class="fa-solid text-white fa-xmark text-2xl cursor-pointer"></i>
                </button>

                <livewire:modal.dream-project-scholarship-modal-form />
            </div>
        </div>

            
    </div>
</x-layouts.app>