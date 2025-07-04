<div class="mx-auto">
    <form wire:submit.prevent='submit'>

        <div class="flex px-4 justify-start mb-6">      
            <button 
                wire:click="backStep" 
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