<x-layouts.app>
    <div class="relative w-full h-[50vh] xl:h-[70vh] bg-[#333333]">
        <div 
            class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/contact-banner.jpg') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#333333]/70 to-[#333333]/70"></div>
    
        <div class="absolute inset-0 flex items-center justify-center text-white text-center scroll-section">
            <h1 class="font-bold text-3xl md:text-5xl lg:text-6xl text-content">
                DONATIONS
            </h1>
        </div>
    </div>
    
    <x-layouts.container>
        <div class="py-16 px-4">
            <!-- Introduction Section -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Make a Difference Today</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Your generous donation helps us continue our mission to create positive change in communities. 
                    Every contribution, no matter the size, makes a meaningful impact on the lives we touch.
                </p>
            </div>

            <!-- Donation Options Grid -->
            <div class="grid lg:grid-cols-2 gap-12 mb-16">
                <!-- Bank Transfer Section -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Bank Transfer</h3>
                        <p class="text-gray-600">Secure and direct bank transfer to our foundation account</p>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-semibold text-gray-700">Account Name:</span>
                                <button onclick="copyToClipboard('Sorok Uni Foundation Inc.')" class="text-blue-600 hover:text-blue-800 text-sm">
                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    Copy
                                </button>
                            </div>
                            <p class="text-gray-800 font-mono text-sm">Sorok Uni Foundation Inc.</p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-semibold text-gray-700">Account Number:</span>
                                <button onclick="copyToClipboard('632-7-63202485-8')" class="text-blue-600 hover:text-blue-800 text-sm">
                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    Copy
                                </button>
                            </div>
                            <p class="text-gray-800 font-mono text-lg font-bold">632-7-63202485-8</p>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-blue-500">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-semibold text-gray-700">Swift Code:</span>
                                <button onclick="copyToClipboard('MBTCPHMM')" class="text-blue-600 hover:text-blue-800 text-sm">
                                    <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                    Copy
                                </button>
                            </div>
                            <p class="text-gray-800 font-mono">MBTCPHMM</p>
                        </div>

                        <div class="bg-blue-50 rounded-lg p-4 mt-6">
                            <div class="flex items-start">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-blue-800 font-medium">Bank: Metrobank</p>
                                    <p class="text-xs text-blue-600 mt-1">For international transfers, use the Swift Code above</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alternative Methods Section -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8 hover:shadow-2xl transition-all duration-300">
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Other Ways to Give</h3>
                        <p class="text-gray-600">Explore additional donation methods and support options</p>
                    </div>

                    <div class="space-y-6">
                        <!-- Contact for Large Donations -->
                        <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-lg p-6 border border-green-200">
                            <h4 class="font-bold text-gray-800 mb-2">Major Gift Donations</h4>
                            <p class="text-gray-600 text-sm mb-3">For substantial contributions or planned giving, our team is ready to assist you.</p>
                            <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                Contact Our Team
                            </button>
                        </div>

                        <!-- Corporate Partnerships -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-lg p-6 border border-purple-200">
                            <h4 class="font-bold text-gray-800 mb-2">Corporate Partnerships</h4>
                            <p class="text-gray-600 text-sm mb-3">Partner with us for CSR initiatives and community impact programs.</p>
                            <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                Learn More
                            </button>
                        </div>

                        <!-- Recurring Donations -->
                        <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-lg p-6 border border-orange-200">
                            <h4 class="font-bold text-gray-800 mb-2">Monthly Giving Program</h4>
                            <p class="text-gray-600 text-sm mb-3">Join our monthly donors and create sustained impact in our community.</p>
                            <button class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                Set Up Monthly Gift
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Impact Section -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 md:p-12 text-white text-center mb-16">
                <h3 class="text-3xl font-bold mb-4">Your Impact Matters</h3>
                <p class="text-lg opacity-90 mb-8 max-w-3xl mx-auto">
                    Thanks to generous donors like you, we've been able to make a lasting difference. 
                    Your contribution helps us continue our vital work in the community.
                </p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div>
                        <div class="text-4xl font-bold mb-2">500+</div>
                        <div class="text-sm opacity-80">Families Helped</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">50+</div>
                        <div class="text-sm opacity-80">Projects Completed</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">₱2M+</div>
                        <div class="text-sm opacity-80">Funds Raised</div>
                    </div>
                </div>
            </div>

            <!-- Donation Process Steps -->
            <div class="mb-16">
                <h3 class="text-3xl font-bold text-center text-gray-800 mb-12">How to Donate</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-600">1</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Choose Amount</h4>
                        <p class="text-gray-600 text-sm">Decide on the amount you'd like to contribute to our cause.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-600">2</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Transfer Funds</h4>
                        <p class="text-gray-600 text-sm">Use the bank details above to make your secure transfer.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-blue-600">3</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Get Receipt</h4>
                        <p class="text-gray-600 text-sm">Send us your transaction details to receive an official receipt.</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="bg-gray-50 rounded-2xl p-8 text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Questions About Donating?</h3>
                <p class="text-gray-600 mb-6">
                    Our team is here to help you make your donation process as smooth as possible.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                        Contact Us
                    </button>
                    <button class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-6 py-3 rounded-lg font-medium transition-colors duration-200">
                        Download Donation Form
                    </button>
                </div>
            </div>
        </div>
    </x-layouts.container>

    <!-- Success Toast (Hidden by default) -->
    <div id="copyToast" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 z-50">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <span>Copied to clipboard!</span>
        </div>
    </div>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                showToast();
            }).catch(function(err) {
                console.error('Could not copy text: ', err);
            });
        }

        function showToast() {
            const toast = document.getElementById('copyToast');
            toast.style.transform = 'translateX(0)';
            setTimeout(() => {
                toast.style.transform = 'translateX(100%)';
            }, 2000);
        }
    </script>
</x-layouts.app>