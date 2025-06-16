<div class="mx-auto">
    
    <!-- Header with improved visual hierarchy -->
    <div class="text-center relative z-10">
        <h1 class="text-2xl sm:text-3xl font-bold leading-tight">Payment Summary</h1>
        <p class="mt-2">Review your order details before completing payment</p>
    </div>

    <!-- Enhanced details section with better visual grouping -->
    <div class="mt-8 bg-gray-50 rounded-xl p-4 sm:p-6 relative z-10">

        <h2 class="text-lg font-semibold mb-4 flex items-center" >
            <i class="fa-solid fa-cart-shopping text-base mr-2 text-gray-400"></i>
        
            Order Details
        </h2>
        
        <div class="space-y-3">
            <div class="flex justify-between items-center ">
                <span class="text-gray-600 text-sm sm:text-base">Membership</span>
                <span class="font-medium text-sm sm:text-base">{{ $membership }}</span>
            </div>
            <div class="flex justify-between items-center ">
                <span class="text-gray-600 text-sm sm:text-base">Subtotal</span>
                <span class="font-medium text-sm sm:text-base">₱{{ $price }}.00</span>
            </div>
            <div class="pt-3 mt-3 border-t border-gray-200 flex items-center justify-between">
                <span class="font-semibold text-sm sm:text-base">Total Amount</span>
                <span class="text-lg font-bold text-primary">₱{{ $price }}.00</span>
            </div>
        </div>
    </div>

    <!-- Payment methods with better organization -->
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

    <!-- Contact info with better presentation -->
    <div class="mt-6 bg-gray-50 rounded-xl p-4 sm:p-6 relative z-10">
        <h2 class="text-lg font-semibold mb-4 flex items-center">
            <i class="fa-solid fa-circle-info text-base mr-2 text-gray-400"></i>
            Contact Information
        </h2>
        
        <div class="space-y-2">
            <div class="flex items-center">
                <i class="fa-solid fa-user text-sm sm:text-base mr-2 text-gray-400"></i>
                <span class="text-sm sm:text-base">{{ $info['first_name'] . ' ' . $info['last_name'] }}</span>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-envelope text-sm sm:text-base mr-2 text-gray-400"></i>
                <span class="text-sm sm:text-base">{{ $info['email'] }}</span>
            </div>
            <div class="flex items-center">
                <i class="fa-solid fa-phone text-sm sm:text-base mr-2 text-gray-400"></i>
                <span class="text-sm sm:text-base">{{ $info['contact_number'] }}</span>
            </div>
        </div>
    </div>

    <!-- Enhanced feedback messages -->
    {{-- <div class="mt-6 relative z-10">
        @if ($errorMessage)
            <div class="bg-red-50 border-l-4 border-red-500 p-4 sm:p-6 rounded-r-lg">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-base text-red-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <p class="font-medium text-red-800">Payment Error</p>
                        <p class="text-sm sm:text-base text-red-600">{{ $errorMessage }}</p>
                    </div>
                </div>
            </div>
        @elseif ($successMessage)
            <div class="bg-green-50 border-l-4 border-green-500 p-4 sm:p-6 rounded-r-lg">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-base text-green-500 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <p class="font-medium text-green-800">Payment Successful</p>
                        <p class="text-sm sm:text-base text-green-600">{{ $successMessage }}</p>
                    </div>
                </div>
            </div>
        @endif
    </div> --}}

    <!-- Enhanced payment button with better visual feedback -->
    <div class="mt-8 relative w-full z-10 flex justify-end items-center">

        <x-buttons.primary wire:click="submit" wire:loading.attr="disabled">
            Confirm and Pay
        </x-buttons.primary>

    </div>

    <!-- Enhanced security footer -->
    <div class="text-center text-xs text-gray-400 pt-4 mt-4 border-t">
        Payments are securely handled via PisoPay. No charges are made until confirmation.
    </div>
</div>