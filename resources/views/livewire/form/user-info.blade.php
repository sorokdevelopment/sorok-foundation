<div class=" mx-auto text-[#333333]">
  <div class="mb-8 text-center">
    <h2 class="text-2xl font-bold text-gray-800">Personal Information</h2>
    <p class="text-gray-600 mt-2">Please fill in your complete details</p>
  </div>
  
    <div class="grid grid-cols-1 gap-6">
      <div>
        <x-inputs.text type="text" wire:model="first_name"  placeholder="Enter first name*"  /> 
        <x-inputs.error errorName="first_name" />
      </div>

      <div>
        <x-inputs.text type="text" wire:model="last_name"  placeholder="Enter last name*"  /> 
        <x-inputs.error errorName="last_name" />
      </div>

      <div>
        <x-inputs.text type="email" wire:model="email" placeholder="Enter email*" />
        <x-inputs.error errorName="email" />
      </div>
    

      <div>
        <x-inputs.text type="number" wire:model="contact_number" placeholder="Enter contact number*"  /> 
        <x-inputs.error errorName="contact_number" />
      </div>

      <div>
        <x-inputs.text type="date" wire:model="birthdate" /> 
        <x-inputs.error errorName="birthdate" />
      </div>
    </div>

  
    <div class="mt-8 flex justify-end">
      <x-buttons.primary wire:click="nextStep">Next</x-buttons.primary>
    </div>
</div>