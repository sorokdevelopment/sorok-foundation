<div 
    x-data="{
        localPlanType: @entangle('plan_type'),
        localMembership: @entangle('membership'),
        emailCheck: @entangle('email_check'),
        
        monthlyRates: { 1: 100, 2: 1000, 3: 10000 },
        membershipNames: {
            1: 'Awareness Champion',
            2: 'Empowerment Champion', 
            3: 'Sustainability Champion'
        },
        
        // Computed properties
        get calculatedPrice() {
            if (!this.localMembership || !this.localPlanType) return 0;
            const monthly = this.monthlyRates[this.localMembership] || 0;
            return this.localPlanType === 'annually' ? monthly * 12 : monthly;
        },
        
        get showPricePreview() {
            return this.localMembership && this.localPlanType;
        },
        
        get isFormValid() {
            return this.localMembership && this.localPlanType && this.emailCheck;
        },
        
        // Methods
        updatePlanType(type) {
            this.localPlanType = type;
            @this.set('plan_type', type, false);
        },
        
        updateMembership(value) {
            const intValue = parseInt(value);
            this.localMembership = intValue;
            @this.set('membership', intValue, false);
        },
        
        formatPrice(price) {
            return new Intl.NumberFormat('en-PH', {
                style: 'currency',
                currency: 'PHP',
                minimumFractionDigits: 2
            }).format(price);
        }
    }"
    class="relative min-h-screen flex items-center justify-center p-4"
>
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0 bg-pattern"></div>
    </div>

    <div class="w-full max-w-6xl mx-auto relative z-10">
        <div class="bg-white/90 backdrop-blur-lg border border-white/20 shadow-lg rounded-xl overflow-hidden relative">
            <div class="absolute top-0 left-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-transparent rounded-full -translate-x-16 -translate-y-16"></div>
            <div class="absolute bottom-0 right-0 w-40 h-40 bg-gradient-to-tl from-primary/10 to-transparent rounded-full translate-x-20 translate-y-20"></div>
            
            <div class="relative px-8 pt-8 pb-4">
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#00674F] to-[#004D3A] rounded-2xl mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl md:text-4xl font-bold bg-gradient-to-r from-[#00674F] to-[#004D3A] bg-clip-text text-transparent mb-2">
                        Update Your Subscription
                    </h1>
                    <p class="text-sm md:text-base text-gray-600 mx-auto leading-relaxed">
                        Seamlessly upgrade or modify your plan to match your evolving needs
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-3 md:p-8">
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2 group-focus-within:text-primary transition-colors">
                            <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                            </svg>
                            Confirm Your Email
                        </label>
                        <div class="relative">
                            <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <x-inputs.text 
                                type="email" 
                                x-model="emailCheck"
                                placeholder="Enter your registered email address"
                            />
                            <x-inputs.error errorName="email_check" />
                        </div>
                    </div>

                    <div class="space-y-3">
                        <label class="block text-sm font-semibold text-gray-700">
                            <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Billing Cycle
                        </label>
                        <div class="relative bg-gray-100 rounded-xl p-1">
                            <div class="grid grid-cols-2 relative">
                                <div 
                                    class="absolute inset-y-1 left-1 w-[calc(50%-4px)] bg-white rounded-lg shadow-md transition-transform duration-300 ease-out"
                                    :class="localPlanType === 'annually' ? 'translate-x-full' : 'translate-x-0'"
                                ></div>
                                
                                <button 
                                    type="button" 
                                    @click="updatePlanType('monthly')"
                                    class="relative z-10 px-6 py-3 text-sm font-semibold transition-colors duration-300 rounded-lg"
                                    :class="localPlanType === 'monthly' ? 'text-primary' : 'text-gray-600'"
                                >
                                    <span class="flex items-center justify-center">Monthly</span>
                                    <div class="text-xs text-gray-500 mt-1">Flexible</div>
                                </button>
                                
                                <button 
                                    type="button" 
                                    @click="updatePlanType('annually')"
                                    class="relative z-10 px-6 py-3 text-sm font-semibold transition-colors duration-300 rounded-lg"
                                    :class="localPlanType === 'annually' ? 'text-primary' : 'text-gray-600'"
                                >
                                    <span class="flex items-center justify-center">Annually</span>
                                    <div class="text-xs text-gray-500 mt-1">Per year</div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2 group-focus-within:text-primary transition-colors">
                            <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                            Membership Plan
                        </label>
                        <div class="relative">
                            <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                                <i class="fa-solid fa-users text-primary"></i>
                            </div>
                            <x-inputs.select 
                                x-model="localMembership"
                                @change="updateMembership($event.target.value)"
                            >
                                <option value="">Choose your perfect plan</option>
                                @foreach (\App\Enums\ChampionMembership::cases() as $enum)
                                    <option value="{{ $enum->value }}">
                                        @switch($enum->name)
                                            @case('AWARENESS')
                                                Awareness Champion
                                                @break
                                            @case('EMPOWERMENT')
                                                Empowerment Champion
                                                @break
                                            @case('SUSTAINABILITY')
                                                Sustainability Champion
                                                @break
                                            @default
                                                {{ ucfirst(strtolower($enum->name)) }}
                                        @endswitch
                                    </option>
                                @endforeach
                            </x-inputs.select>
                            <x-inputs.error errorName="membership" />
                        </div>
                    </div>

                    <div 
                        x-show="showPricePreview"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="bg-gradient-to-r from-primary/5 to-primary/10 rounded-xl p-4 border border-primary/10"
                    >
                        <div class="flex flex-col sm:flex-row space-y-2 items-center sm:justify-between">
                            <div>
                                <div class="text-sm text-gray-600">
                                    New <span x-text="localPlanType === 'annually' ? 'Annual' : 'Monthly'" class="capitalize"></span> Cost
                                </div>
                                <div class="text-2xl font-bold mt-2 sm:mt-0 text-primary">
                                    <span x-text="formatPrice(calculatedPrice)"></span>
                                    <span class="text-sm font-normal text-gray-500">
                                        /<span x-text="localPlanType === 'annually' ? 'year' : 'month'"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm text-primary font-medium flex items-center justify-end">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span x-text="localPlanType === 'annually' ? 'Annual billing' : 'Monthly billing'"></span>
                                </div>
                                <div class="text-xs text-gray-500">
                                    <span x-text="localPlanType === 'annually' ? 'Billed once per year' : 'Billed every month'"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3 pt-3 border-t border-primary/10">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                                Selected Plan: <span x-text="membershipNames[localMembership]" class="font-medium text-primary ml-1"></span>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-buttons.primary 
                            type="button" 
                            wire:click="confirm" 
                            wire:loading.attr="disabled"
                            x-bind:disabled="!isFormValid"
                        >
                            <div wire:loading.remove wire:target="confirm" class="flex items-center">
                                Confirm 
                            </div>
                            <div wire:loading wire:target="confirm" class="flex w-full justify-between items-center">
                                Processing...
                            </div>
                        </x-buttons.primary>
                    </div>
                </div>

                <div class="flex items-center justify-center relative">
                    <div class="relative">
                        <div class="absolute -top-4 -left-4 w-20 h-20 bg-primary/10 rounded-full animate-pulse"></div>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-primary/10 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                        
                        <div class="relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-2 sm:p-8 shadow-lg">
                            <img src="https://illustrations.popsy.co/emerald/web-design.svg" 
                                 alt="Subscription Update" 
                                 class="md:max-w-sm mx-auto" 
                                 draggable="false" />
                        </div>
                        
                        <div class="absolute -left-8 top-1/4 bg-white rounded-lg shadow-lg p-3 animate-bounce" style="animation-delay: 1.2s; animation-duration: 3s;">
                            <div class="flex items-center text-sm">
                                <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                                <span class="text-gray-700 font-medium">Instant Updates</span>
                            </div>
                        </div>
                        
                        <div class="absolute -right-8 bottom-1/4 bg-white rounded-lg shadow-lg p-3 animate-bounce" style="animation-delay: 1.4s; animation-duration: 3s;">
                            <div class="flex items-center text-sm">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                                <span class="text-gray-700 font-medium">Flexible Plans</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-8 pb-8">
                <div class="text-center text-sm text-gray-500">
                    Questions? <a href="#" class="text-primary hover:text-emerald-700 font-medium transition-colors">Contact our support team</a>
                </div>
            </div>
        </div>

        <livewire:components.modal.confirm-modal />
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .bg-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(0,103,79,0.3) 1px, transparent 0); 
            background-size: 40px 40px;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #00674F;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #004D3A;
        }
    </style>
</div>