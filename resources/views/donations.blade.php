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
        <div class="py-8 md:py-16 space-y-16">
            <div class="relative overflow-hidden bg-gradient-to-br from-[#00674F]/5 via-white to-[#00674F]/10 rounded-3xl p-8 md:p-12 mb-12 md:mb-20 border border-[#00674F]/10">
                <div class="absolute top-0 right-0 w-64 h-64 bg-[#00674F]/5 rounded-full -translate-y-32 translate-x-32"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-[#00674F]/10 rounded-full translate-y-16 -translate-x-16"></div>
                
                <div class="relative z-10 text-center max-w-5xl mx-auto">
                    <div class="inline-flex items-center bg-[#00674F]/10 px-6 py-3 rounded-full mb-6">
                        <span class="text-primary font-semibold text-sm">DSWD SP-SP-00001-2025 • Valid until: January 10, 2026</span>
                    </div>
                    <h1 class="font-bold text-4xl lg:text-5xl text-primary mb-6 text-center tracking-tight">
                        Tara Tulong Tayo!
                    </h1>
                    
                    <div class="mx-auto space-y-6 text-gray-700">
                        <p class="mt-8 text-center text-base md:text-lg lg:text-xl leading-relaxed">
                            Together, we can make a difference. Through your donation, you help Sorok Uni Foundation 
                            continue its mission of empowering forgotten neighbors like <span class="font-semibold text-primary">persons affected by Leprosy</span>, 
                            <span class="font-semibold text-primary">underprivileged children</span>, supporting <span class="font-semibold text-primary">underprivileged indigenous peoples</span>, 
                            <span class="font-semibold text-primary">children & youth with disability</span>, and protecting children from 
                            <span class="font-semibold text-primary">online sexual abuse and exploitation</span>.
                        </p>
                        
                        <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 border border-[#00674F]/20">
                            <p class="text-base md:text-lg lg:text-xl font-medium text-primary">
                                Your gift—big or small—goes a long way in bringing hope and brighter futures to Filipino communities in need.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-8 md:space-y-12 mb-16 md:mb-20">
                <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-[#00674F] to-[#00674F]/80 p-6 md:p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Bank Transfer</h3>
                                <p class="text-white/90">Secure and direct bank transfer</p>
                            </div>
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white/20 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-credit-card text-2xl md:text-3xl text-white"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6 md:p-8">
                        <div class="grid sm:grid-cols-2 gap-4 md:gap-6">
                            <div class="group bg-gray-50 hover:bg-[#00674F]/5 rounded-xl p-4 transition-all duration-300 border-2 border-transparent hover:border-[#00674F]/20">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-semibold text-gray-700">Bank Branch</span>
                                </div>
                                <p class="font-secondary text-gray-800 break-all">Metrobank Intramuros-CBCP</p>
                            </div>

                            <div class="group bg-gray-50 hover:bg-[#00674F]/5 rounded-xl p-4 transition-all duration-300 border-2 border-transparent hover:border-[#00674F]/20">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-semibold text-gray-700">Account Name</span>
                                </div>
                                <p class="font-secondary text-gray-800 break-all">Sorok Uni Foundation, Inc.</p>
                            </div>

                            <div class="group bg-gradient-to-br from-[#00674F]/5 to-[#00674F]/10 rounded-xl p-4 transition-all duration-300 border-2 border-[#00674F]/20 hover:border-[#00674F]/40">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-semibold text-gray-700">Account Number</span>
                                </div>
                                <p class="font-secondary text-xl md:text-2xl font-bold text-primary break-all">632-7-63202485-8</p>
                            </div>

                            <div class="group bg-gray-50 hover:bg-[#00674F]/5 rounded-xl p-4 transition-all duration-300 border-2 border-transparent hover:border-[#00674F]/20">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-semibold text-gray-700">SWIFT Code</span>
                                </div>
                                <p class="font-secondary text-gray-800 break-all">MBTCPHMM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-[#00674F] to-[#00674F]/80 p-6 md:p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-2">Digital Payments</h3>
                                <p class="text-white/90">Quick and convenient QR payments</p>
                            </div>
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white/20 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-2xl md:text-3xl text-white"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6 md:p-8">
                        <div class="grid lg:grid-cols-2 gap-8 items-center">
                            <div class="space-y-6">
                                <div class="bg-gradient-to-br from-[#00674F]/5 to-[#00674F]/10 rounded-xl p-4 border-2 border-[#00674F]/20">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="font-semibold text-gray-700">QR PH Account</span>
                                    </div>
                                    <p class="font-secondary text-gray-800 text-sm md:text-base break-all">Sorok Uni Foundation, Inc.</p>
                                </div>
                                
                                <div class="text-center lg:text-left">
                                    <h4 class="font-bold text-lg text-gray-800 mb-3">How to use QR Code:</h4>
                                    <div class="space-y-2 text-sm text-gray-600">
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 bg-[#00674F]/10 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                                <span class="text-xs font-bold text-primary">1</span>
                                            </div>
                                            <p>Open your mobile banking app or e-wallet</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 bg-[#00674F]/10 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                                <span class="text-xs font-bold text-primary">2</span>
                                            </div>
                                            <p>Scan the QR code or save the image to scan later</p>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="w-6 h-6 bg-[#00674F]/10 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                                <span class="text-xs font-bold text-primary">3</span>
                                            </div>
                                            <p>Enter your donation amount and complete the transfer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="text-center">
                                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6 border-2 border-dashed border-gray-300 hover:border-[#00674F]/30 transition-all duration-300">
                                    <h4 class="font-bold text-gray-800 mb-4 text-lg">Scan to Donate</h4>
                                    <div class="rounded-xl">
                                        <img src="{{ asset('images/QR_SUFI.png') }}" 
                                            alt="QR Code for Sorok Uni Foundation Donations" 
                                            loading="lazy"
                                            class="w-full max-w-sm mx-auto h-auto object-contain rounded-lg shadow-sm hover:shadow-md transition-all duration-300">
                                    </div>
                                    <p class="text-sm text-gray-600 mt-4 font-medium">
                                        Compatible with most Philippine e-wallets and banking apps
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-[#00674F] via-[#00674F]/90 to-[#00674F]/80 rounded-3xl p-4 sm:p-8 md:p-12 text-white mb-16 md:mb-20 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -translate-y-20 translate-x-20"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>
                
                <div class="relative z-10">
                    <div class="text-center mb-8 md:mb-12">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-gift text-3xl text-white"></i>
                        </div>
                        <h1 class="font-bold text-4xl lg:text-5xl text-white mb-6 text-center tracking-tight">
                            In-Kind Donations
                        </h1>

                        <p class="mt-8 opacity-90 max-w-4xl mx-auto text-center text-base md:text-lg lg:text-xl leading-relaxed">
                            We also welcome in-kind support such as food packs, hygiene kits, school supplies, assistive devices, 
                            and more. Please coordinate with us beforehand so we can match your donation with the 
                            community's current needs.
                        </p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 max-w-2xl mx-auto">
                        <p class="font-semibold text-center mb-6 text-xl">Contact us to coordinate your donation:</p>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <a class="flex flex-col sm:flex-row items-center justify-center bg-white/20 hover:bg-white/30 rounded-xl p-4 transition-all duration-300 group">
                                <i class="fas fa-envelope mr-3 group-hover:scale-110 transition-transform"></i>
                                <span class="font-medium mt-2 sm:mt-0 text-base">fcd@sorokuni.com</span>
                            </a>
                            <a class="flex flex-col sm:flex-row items-center justify-center bg-white/20 hover:bg-white/30 rounded-xl p-4 transition-all duration-300 group">
                                <i class="fas fa-phone mr-3 group-hover:scale-110 transition-transform"></i>
                                <span class="font-medium mt-2 sm:mt-0 text-base">+63 917 168 7834</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-16 md:mb-20">
                <div class="text-center mb-12 md:mb-16">
                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-4">After You Give</h3>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Follow these simple steps to complete your donation process</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8 relative">
                    <div class="hidden md:block absolute top-24 left-1/6 right-1/6 h-0.5 bg-gradient-to-r from-[#00674F]/20 via-[#00674F]/40 to-[#00674F]/20"></div>
                    
                    <div class="relative group">
                        <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 hover:border-[#00674F]/30 transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#00674F] to-[#00674F]/80 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <span class="text-2xl font-bold text-white">1</span>
                            </div>
                            <h4 class="font-bold text-xl text-gray-800 mb-4 text-center">Send Proof of Donation</h4>
                            <p class="text-gray-600 text-center mb-6 leading-relaxed">
                                Email your deposit slip or transaction screenshot to our team
                            </p>
                            <div class="bg-[#00674F]/5 p-4 rounded-xl border border-[#00674F]/20">
                                <p class="text-sm text-primary font-medium text-center">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span class="font-secondary">fcd@sorokuni.com</span>
                                </p>
                                <p class="text-sm text-gray-600 text-center mt-2">
                                    Subject: Donation – [Your Name/Company]
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative group">
                        <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 hover:border-[#00674F]/30 transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#00674F] to-[#00674F]/80 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <span class="text-2xl font-bold text-white">2</span>
                            </div>
                            <h4 class="font-bold text-xl text-gray-800 mb-4 text-center">Get Official Receipt</h4>
                            <p class="text-gray-600 text-center mb-6 leading-relaxed">
                                We'll issue an official receipt for your donation records
                            </p>
                            <div class="bg-[#00674F]/5 p-4 rounded-xl border border-[#00674F]/20">
                                <p class="text-sm text-primary text-center font-medium">
                                    Include: Name/Company, TIN, Address & Contact Number
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative group">
                        <div class="bg-white rounded-2xl p-8 border-2 border-gray-100 hover:border-[#00674F]/30 transition-all duration-300 hover:-translate-y-2">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#00674F] to-[#00674F]/80 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <span class="text-2xl font-bold text-white">3</span>
                            </div>
                            <h4 class="font-bold text-xl text-gray-800 mb-4 text-center">Designate Your Gift</h4>
                            <p class="text-gray-600 text-center mb-6 leading-relaxed">
                                You may choose which program to support, or let us allocate it to the area of greatest need.
                            </p>
                            <div class="bg-[#00674F]/5 p-4 rounded-xl border border-[#00674F]/20">
                                <p class="text-sm text-primary text-center font-medium">
                                    Specify your preferred program or "Greatest Need"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-4 sm:p-8 md:p-12 mb-16 md:mb-20 border border-gray-200">
                <div class="text-center mb-8 md:mb-12">
                    <div class="w-20 h-20 bg-[#00674F]/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-handshake text-3xl text-primary"></i>
                    </div>


                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-4">Corporate Partnerships</h3>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Partner with us for meaningful CSR initiatives, payroll giving programs, or grant support. 
                        Together, we can create lasting impact in Filipino communities.
                    </p>
                </div>
                
                <div class="max-w-2xl mx-auto">
                    <div class="bg-white rounded-2xl  p-6 md:p-8 shadow-lg border border-gray-200">
                        <h4 class="font-bold text-xl text-center text-gray-800 mb-6">Get in touch with our team:</h4>
                        <div class="bg-white/10 backdrop-blur-sm mx-auto">
                            <div class="grid sm:grid-cols-2 gap-4">
                                <a class="flex flex-col sm:flex-row items-center justify-center bg-[#00674F]/5 hover:bg-[#00674F]/10 rounded-xl p-4 transition-all duration-300 group">
                                    <i class="fas fa-envelope mr-3 text-primary group-hover:scale-110 transition-transform"></i>
                                    <span class="font-medium mt-2 sm:mt-0 text-primary text-base">fcd@sorokuni.com</span>
                                </a>
                                <a class="flex flex-col sm:flex-row items-center justify-center bg-[#00674F]/5 hover:bg-[#00674F]/10 rounded-xl p-4 transition-all duration-300 group">
                                    <i class="fas fa-phone mr-3 text-primary group-hover:scale-110 transition-transform"></i>
                                    <span class="font-medium mt-2 sm:mt-0 text-primary text-base">+63 917 168 7834</span>
                                </a>
                            </div>
                        </div>
                            
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h5 class="font-semibold text-gray-800 mb-3 text-center">Partnership Opportunities:</h5>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-center text-sm">
                                <div class="bg-[#00674F]/5 text-primary px-3 py-2 rounded-lg font-medium">CSR Programs</div>
                                <div class="bg-[#00674F]/5 text-primary px-3 py-2 rounded-lg font-medium">Payroll Giving</div>
                                <div class="bg-[#00674F]/5 text-primary px-3 py-2 rounded-lg font-medium">Grant Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#00674F]/5 rounded-3xl p-8 md:p-12 text-center mb-8 md:mb-12 border border-[#00674F]/10">
                <div class="max-w-4xl mx-auto">
                    <div class="w-20 h-20 bg-[#00674F]/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-primary mb-6">Transparency & Accountability</h3>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-8">
                        Sorok Uni Foundation is a duly registered non-profit in the Philippines. We uphold the highest 
                        standards of financial transparency and provide comprehensive impact reports to our donors and partners.
                    </p>
                    <div class="grid md:grid-cols-3 gap-6 mt-8">
                        <div class="bg-white/80 rounded-xl p-4 border border-[#00674F]/20">
                            <div class="w-12 h-12 bg-[#00674F]/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-file-alt text-lg text-primary"></i>
                            </div>
                            <h4 class="font-semibold text-primary mb-1">Official Registration</h4>
                            <p class="text-sm text-gray-600">Registered Philippine Non-Profit</p>
                        </div>
                        <div class="bg-white/80 rounded-xl p-4 border border-[#00674F]/20">
                            <div class="w-12 h-12 bg-[#00674F]/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-chart-bar text-lg text-primary"></i>
                            </div>
                            <h4 class="font-semibold text-primary mb-1">Impact Reports</h4>
                            <p class="text-sm text-gray-600">Regular transparency updates</p>
                        </div>
                        <div class="bg-white/80 rounded-xl p-4 border border-[#00674F]/20">
                            <div class="w-12 h-12 bg-[#00674F]/10 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fas fa-lock text-lg text-primary"></i>
                            </div>
                            <h4 class="font-semibold text-primary mb-1">Secure Processing</h4>
                            <p class="text-sm text-gray-600">Safe & protected donations</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative text-center bg-gradient-to-br from-[#00674F] via-[#00674F]/95 to-[#00674F]/80 rounded-3xl p-8 md:p-16 text-white overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                <div class="absolute bottom-0 left-0 w-20 h-20 bg-white/5 rounded-full translate-y-10 -translate-x-10"></div>
                
                <div class="relative z-10 max-w-4xl mx-auto">
                    <div class="w-24 h-24 bg-white/20 backdrop-blur-sm rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <i class="fas fa-heart text-4xl text-white"></i>
                    </div>

                    <h1 class="font-bold text-4xl lg:text-5xl text-white mb-6 text-center tracking-tight">
                        Maraming Salamat!
                    </h1>

                    <h4 class="text-xl md:text-2xl font-medium mb-8 opacity-90">Thank You for Your Generosity!</h4>
                    
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 mb-8">
                        <p class="text-center text-base md:text-lg lg:text-xl leading-relaxed">
                            Your generosity fuels <span class="font-bold">"Tara Tulong Tayo!"</span>—a movement of hope and compassion 
                            that uplifts lives, one family and one community at a time. Together, we're creating lasting change 
                            and brighter futures for those who need it most.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </x-layouts.container>

</x-layouts.app>