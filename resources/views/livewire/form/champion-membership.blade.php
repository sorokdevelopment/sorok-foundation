<div class="mx-auto">

    <div class="text-center mb-10">
        <h1 class="text-2xl sm:text-3xl font-bold leading-tight">{{ $membership }} CHAMPION</h1>
    </div>

    <div class="bg-white rounded-xl md:border md:border-gray-200 md:shadow py-6 px-2 sm:p-6">
        <h2 class="text-xl sm:text-2xl font-bold text-primary mb-4">What you'll gain</h2>

        @if($membershipId === 1)
            <livewire:form.membership.awareness />
        @elseif($membershipId === 2)
            <livewire:form.membership.empowerment />

        @else 
            <livewire:form.membership.sustainability />
        @endif
    </div>

    <div class="mt-10 bg-white p-4 sm:p-6 rounded-xl border border-gray-200 shadow">
        <label class="flex items-start justify-between gap-4">
            <input 
                type="checkbox" 
                wire:model="agreed" 
                class="h-6 w-6 text-primary border-[#00674F] rounded focus:ring-[#00674F] transition"
            >
            <div class="text-sm sm:text-base">
                <p class="font-semibold mb-1">
                    Membership Perks Acknowledgement
                </p>
                <p class="leading-relaxed">
                    I have read and agree to the terms and <a href="{{ route('privacy-policy') }}" class="hover:underline text-blue-600 font-medium">privacy policy</a> of the <strong>{{ $membership }}</strong> Champions membership.
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
        <button wire:loading.attr="disabled" wire:click="nextStep" class="w-full sm:w-auto px-6 py-3 bg-[#00674F] hover:bg-[#004C3C] text-white font-medium rounded-lg shadow-sm transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-[#00674F] focus:ring-offset-2">
            Next <i class="fa-solid fa-arrow-right ml-2"></i>
        </button>
    </div>

</div>
