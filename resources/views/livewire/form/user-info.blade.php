<div class=" mx-auto">
  <div class="mb-8 text-center">
    <h1 class="text-2xl sm:text-3xl font-bold leading-tight">Personal Information</h1>
    <p class="mt-2">Please fill in your complete details</p>
  </div>

  <div class="grid grid-cols-1 gap-6">
    <div class="relative">
      <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
        <i class="fas fa-user text-primary"></i>
      </div>
      <x-inputs.text type="text" wire:model="first_name"  placeholder="Enter first name*"  /> 
      <x-inputs.error errorName="first_name" />
    </div>

    <div class="relative">
      <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
        <i class="fas fa-user text-primary"></i>
      </div>
      <x-inputs.text type="text" wire:model="last_name"  placeholder="Enter last name*"  /> 
      <x-inputs.error errorName="last_name" />
    </div>

    <div class="relative">
      <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
        <i class="fas fa-envelope text-primary"></i>
      </div>
      <x-inputs.text type="email" wire:model="email" placeholder="Enter email*" />
      <x-inputs.error errorName="email" />
    </div>
  

    <div class="relative">
      <div class="absolute top-3 left-0 z-10 flex items-center pl-3 pointer-events-none">
        <i class="fas fa-phone text-primary"></i>
      </div>
      <x-inputs.text type="number" wire:model="contact_number" placeholder="Enter contact number*"  /> 
      <x-inputs.error errorName="contact_number" />
    </div>

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
      <i class="fa-solid fa-arrow-right ml-2"></i>
    </x-buttons.primary>
  </div>
</div>