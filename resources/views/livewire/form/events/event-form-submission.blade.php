<div class="bg-white border-b-4 md:border-l-6 md:border-b-0 border-[#00674F] md:rounded-r-lg md:w-2/3 2xl:max-w-1/2 mx-auto shadow-lg md:-mt-40 relative z-1 scroll-section">
    <div class="w-full px-8 py-12">
        <div class="mb-8 text-center">
            <div class="inline-flex justify-center items-center gap-3 bg-[#00674F]/10 px-6 py-2.5 mb-6 rounded-full">
                <span class="h-2 w-2 bg-[#00674F] rounded-full animate-pulse"></span>
                <span class="text-sm font-bold text-primary tracking-wide">JOIN THE MOVEMENT</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-bold leading-tight">{{ $event->title }}</h1>
            <p class=" mt-4">Please fill in your complete details</p>
        </div>
        
        <div class="grid grid-cols-1 gap-10">
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-10">
                <div class="relative">
                    <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-user text-primary"></i>
                    </div>
                    <x-inputs.text type="text" wire:model="full_name"  placeholder="Enter full name*"  /> 
                    <x-inputs.error errorName="full_name" />
                </div>
                <div class="relative">
                    <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-envelope text-primary"></i>
                    </div>
                    <x-inputs.text type="email" wire:model="email" placeholder="Enter email*" />
                    <x-inputs.error errorName="email" />
                </div>
            </div>
            <div class="grid sm:grid-cols-2 grid-cols-1 gap-10">
                <div class="relative">
                    <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-phone text-primary"></i>
                    </div>
                    <x-inputs.text type="number" wire:model="contact_number" placeholder="Enter contact number*"  /> 
                    <x-inputs.error errorName="contact_number" />
                </div>
                <div class="relative">
                    <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-landmark text-primary"></i>
                    </div>
                    <x-inputs.select wire:model.live="action" >
                        <option value="">Select your action*</option>
                        @foreach($championDecision as $decision)
                            <option value="{{ $decision->value }}">{{ $decision->name }}</option>
                        @endforeach
                    </x-inputs.select>

                    <x-inputs.error errorName="action" />
                </div>
            </div>
            <div>
                <div class="relative">
                    <div class="flex items-center mb-1">
                        <p class="text-[#333333] text-sm font-primary font-semibold">Note</p>
                        <span class="text-xs ml-1 text-[#333333]/70 font-primary">(Optional)</span>
                    </div>
                    
                    <x-inputs.textarea wire:model="notes" placeholder="Enter a message" /> 
                    <x-inputs.error errorName="notes" />
                </div>
            </div>
           
        </div>
        <div class="mt-10 flex flex-col sm:flex-row justify-between items-center gap-5 sm:gap-6">
            <p class="text-center sm:text-left">
                Need help? 
                <a href="{{ route('contact-us') }}" class="text-primary hover:text-[#004C3C] font-medium">
                    Contact support
                </a>
            </p>
            <x-buttons.primary wire:click="submit">
                Submit
            </x-buttons.primary>
        </div>

    </div>
</div>