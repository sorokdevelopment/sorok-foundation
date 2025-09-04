<div class="rounded-2xl max-h-[90vh] py-6 flex flex-col">
    <div class="overflow-y-auto overflow-x-hidden">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold mb-3 text-[#00674F]">Sponsor A Dream</h2>
        </div>

        <div class="rounded-xl border border-gray-100 bg-gray-50 p-2 sm:p-8">
            @if($step === 1)
                <form class="space-y-8">
                    
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-1 h-6 rounded-full mr-3 bg-[#00674F]"></div>
                            <h3 class="text-xl font-bold text-gray-900">Personal Information</h3>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="relative">
                                <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                                <x-inputs.text type="text" wire:model.live="first_name"  placeholder="Enter first name*"  /> 
                                <x-inputs.error errorName="first_name" />
                            </div>

                            <div class="relative">
                                <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-user text-primary"></i>
                                </div>
                                <x-inputs.text type="text" wire:model.live="last_name"  placeholder="Enter last name*"  /> 
                                <x-inputs.error errorName="last_name" />
                            </div>

                            <div class="relative">
                                <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <x-inputs.text type="email" wire:model.live="email" placeholder="Enter email*" />
                                <x-inputs.error errorName="email" />
                            </div>

                            <div class="relative">
                                <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <x-inputs.text type="number" wire:model.live="contact_number" placeholder="Enter contact number*"  /> 
                                <x-inputs.error errorName="contact_number" />
                            </div>
                        </div>
                        <div class="relative gap-6 mt-6">
                            <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                                <i class="fa-solid fa-calendar text-primary"></i>
                            </div>
                            <x-inputs.select wire:model.live="month_of_payment" >
                                <option value="">Select number of months to pay*</option>
                                @for($i = 1; $i <= 10 ; $i++)
                                    <option value="{{ $i }}">{{ $i }} {{ Str::plural('Month', $i) }}</option>
                                @endfor 
                            </x-inputs.select>

                            <x-inputs.error errorName="month_of_payment" />
                        </div>
                    </div>

                    
                    <div class="mb-8">
                        <div class="flex items-center mb-6">
                            <div class="w-1 h-6 rounded-full mr-3 bg-[#00674F]"></div>
                            <h3 class="text-xl font-bold text-gray-900">Select Sponsorship Level</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            <div class="relative">
                                <input 
                                    type="radio" 
                                    id="membership_dream" 
                                    name="membership" 
                                    value="1" 
                                    wire:model.live="membership"
                                    class="sr-only peer"
                                />
                                <label for="membership_dream" 
                                    class="cursor-pointer border-2 rounded-2xl p-6 flex flex-col items-center sm:items-start bg-white shadow-sm 
                                        hover:border-[#00674F] hover:bg-green-50 hover:shadow-md
                                        transition-all duration-200 
                                        border-gray-200 
                                        peer-checked:border-[#00674F] peer-checked:bg-green-50 peer-checked:shadow-md
                                        peer-focus:ring-2 peer-focus:ring-[#00674F] peer-focus:ring-opacity-20"
                                >
                                    <div class="flex items-center mb-4">
                                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center mr-4 
                                            peer-checked:bg-[#00674F] peer-checked:bg-opacity-10 transition-all duration-200">
                                            <i class="fas fa-crown text-primary text-2xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-bold text-gray-900">Dream Category</h4>
                                            <p class="text-sm text-gray-600">High-performing students (90%+) • Full support</p>
                                        </div>
                                    </div>

                                    <div class="flex items-baseline justify-center sm:justify-start w-full">
                                        <span class="text-2xl font-bold text-primary">₱6,500</span>
                                        <span class="text-gray-500 ml-1">/month</span>
                                    </div>

                                    <div class="absolute top-4 right-4 opacity-0 peer-checked:opacity-100 transition-opacity duration-200">
                                        <div class="w-6 h-6 bg-[#00674F] rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="relative">
                                <input 
                                    type="radio" 
                                    id="membership_faith" 
                                    name="membership" 
                                    value="2" 
                                    wire:model.live="membership"
                                    class="sr-only peer"
                                />
                                <label for="membership_faith" 
                                    class="cursor-pointer border-2 rounded-2xl p-6 flex flex-col items-center sm:items-start bg-white shadow-sm 
                                        hover:border-[#00674F] hover:bg-green-50 hover:shadow-md
                                        transition-all duration-200 
                                        border-gray-200 
                                        peer-checked:border-[#00674F] peer-checked:bg-green-50 peer-checked:shadow-md
                                        peer-focus:ring-2 peer-focus:ring-[#00674F] peer-focus:ring-opacity-20"
                                >
                                    <div class="flex items-center mb-4">
                                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center mr-4 
                                            peer-checked:bg-[#00674F] peer-checked:bg-opacity-10 transition-all duration-200">
                                            <i class="fas fa-heart text-primary text-2xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-bold text-gray-900">Faith Category</h4>
                                            <p class="text-sm text-gray-600">Hardworking students (85-89%) • Essential support</p>
                                        </div>
                                    </div>

                                    <div class="flex items-baseline justify-center sm:justify-start w-full">
                                        <span class="text-2xl font-bold text-primary">₱1,500</span>
                                        <span class="text-gray-500 ml-1">/month</span>
                                    </div>

                                    <div class="absolute top-4 right-4 opacity-0 peer-checked:opacity-100 transition-opacity duration-200">
                                        <div class="w-6 h-6 bg-[#00674F] rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white text-sm"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        @error('membership') 
                            <div class="text-red-500 text-sm font-medium flex items-center mt-4">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                {{ $message }}
                            </div> 
                        @enderror
                    </div>

                    <div class="mt-10 bg-white p-4 sm:p-6 rounded-xl border border-gray-200 shadow">
                        <label class="flex items-start justify-between gap-4">
                            <input 
                                type="checkbox" 
                                wire:model.live="agreed" 
                                class="h-6 w-6 text-primary border-[#00674F] rounded focus:ring-[#00674F] transition"
                            >
                            <div class="text-sm sm:text-base">
                                <p for="privacy_consent" class="text-gray-700 text-sm leading-relaxed">
                                    I consent to the collection and processing of my personal data for responding to my inquiry. 
                                    I understand my information will be handled according to our 
                                    <a target="__blank" href="{{ route('privacy-policy') }}" class="hover:underline text-blue-600 font-medium">Privacy Policy</a>.
                                </p>
                            </div>
                        </label>

                        @error('agreed')
                            <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-10 flex flex-col sm:flex-row justify-between items-center gap-5 sm:gap-6">
                        <p class="text-center sm:text-left">
                            Need help? 
                            <a href="{{ route('contact-us') }}" class="text-primary hover:text-[#004C3C] font-medium">
                                Contact support
                            </a>
                        </p>
                        <x-buttons.primary wire:click="nextStep" wire:loading.attr="disabled">
                            Next
                        </x-buttons.primary>
                    </div>
                </form>
            @else 
                        <div class="mx-auto">
                <form wire:submit.prevent='submit'>

                    <div class="flex px-4 justify-start mb-6">      
                        <button 
                            wire:click="previousStep" 
                            type="button"
                            class="text-primary text-base cursor-pointer hover:underline font-bold uppercase"
                        >
                            <i class="fas fa-arrow-left mr-2"></i> Back
                        </button>
                    </div>
                    <div class="text-center relative z-10">
                        <h1 class="text-2xl sm:text-3xl font-bold leading-tight">Payment Summary</h1>
                        <p class="mt-2">Review your order details before completing payment</p>
                    </div>

                    <div class="mt-8 bg-white border-gray-200 shadow-sm rounded-xl p-4 sm:p-6 relative z-10">
                        <div class="border-gray-200">
                            <div class="flex justify-between py-2">
                                <span class="text-gray-600">Sponsor Scholar:</span>
                                <span class="font-medium">{{ \App\Enums\ScholarSponsorMembership::from($membership)->label() }}</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-gray-600">Price:</span>
                                <span class="font-medium">₱{{ number_format(\App\Enums\ScholarSponsorMembership::from($membership)->price()) }}</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-gray-600">Billing Month:</span>
                                <span class="font-medium">{{ $month_of_payment . ' ' . Str::plural('Month', $month_of_payment) }}</span>
                            </div>
                            <div class="flex justify-between py-2 font-semibold border-t border-gray-200 mt-2">
                                <span>Total Amount:</span>
                                <span class="text-primary text-4xl font-bold">₱{{ number_format($finalPrice) }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 relative z-10">
                        <h2 class="text-lg font-semibold mb-4 flex items-center">
                            <i class="fa-solid fa-money-bill text-base mr-2 text-gray-400"></i>
                            Payment Method
                        </h2>
                        
                        <div class="flex justify-center items-center flex-wrap mt-6 gap-4">
                            <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-credit-card"></i>
                                <span class="ml-1 text-sm font-medium">Cards</span>
                            </div>
                            
                            <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg  flex items-center justify-center">
                                <i class="fa-solid fa-wallet"></i>
                                <span class="ml-1 text-sm font-medium">E-wallet</span>
                            </div>
                            
                            <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg flex items-center justify-center">
                                <i class="fa-solid fa-building-columns"></i>
                                <span class="ml-1 text-sm font-medium">Online</span>
                            </div>
                            
                            <div class="p-2 bg-[#00674F]/10 text-primary rounded-lg flex items-center justify-center">
                                <i class="fa-brands fa-cc-visa"></i>
                                <span class="ml-1 text-sm font-medium">Visa</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 rounded-xl bg-white relative shadow-sm p-4 sm:p-6 z-10">
                        <h2 class="text-lg font-semibold mb-4 flex items-center">
                            <i class="fa-solid fa-circle-info text-base mr-2 text-gray-400"></i>
                            Contact Information
                        </h2>
                        
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <i class="fa-solid fa-user text-sm sm:text-base mr-2 text-gray-400"></i>
                                <span class="text-sm sm:text-base">{{ $first_name . ' ' . $last_name }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fa-solid fa-envelope text-sm sm:text-base mr-2 text-gray-400"></i>
                                <span class="text-sm sm:text-base">{{ $email }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fa-solid fa-phone text-sm sm:text-base mr-2 text-gray-400"></i>
                                <span class="text-sm sm:text-base">{{ $contact_number }}</span>
                            </div>
                        </div>
                    </div>



                    <div class="mt-8 relative w-full z-10 flex justify-end items-center">
                        
                        <x-buttons.primary wire:click="submit" wire:loading.attr="disabled">
                            Confirm and Pay
                        </x-buttons.primary>

                    </div>
                </form>
                <div class="text-center text-xs text-gray-400 pt-4 mt-4 border-t">
                    Payments are securely handled via PisoPay. No charges are made until confirmation.
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Success alert -->
    <livewire:modal.alert />
</div>
