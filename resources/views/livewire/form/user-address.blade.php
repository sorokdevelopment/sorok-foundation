<div>
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold text-gray-800">Address</h2>
        <p class="text-gray-600 mt-2">Please fill in your complete details</p>
    </div>
    <div class="border-gray-200">
        <div class="mb-6">
            <x-inputs.text type="text" wire:model="street" placeholder="House #, Street, Building"  />  
            <x-inputs.error errorName="street" />
        </div>

        <div class="grid grid-cols-1 gap-6">
            <div>
                <x-inputs.select wire:model.live="selectedRegion" >
                    <option value="">Select Region*</option>
                    @foreach($regions as $region)
                        <option value="{{ $region->region_id }}">{{ $region->name }}</option>
                    @endforeach
                </x-inputs.select>

                <x-inputs.error errorName="selectedRegion" />
            </div>

            <div>
                <x-inputs.select wire:model.live="selectedProvince" :disabled="!$selectedRegion">
                    <option value="">Select Province*</option>

                    @foreach($provinces as $province)
                    <option value="{{ $province->province_id }}">{{ $province->name }}</option>
                    @endforeach
                </x-inputs.select>

                <div wire:loading wire:target="SelectedRegion" class="text-xs text-gray-500 mt-1">Loading provinces...</div>
                <x-inputs.error errorName="selectedProvince" />
            </div>

            <div>
                <x-inputs.select wire:model.live="selectedCity" :disabled="!$selectedProvince">
                    <option value="">Select City*</option>

                    @foreach($cities as $city)
                    <option value="{{ $city->city_id }}">{{ $city->name }}</option>
                    @endforeach
                </x-inputs.select>
                <div wire:loading wire:target="selectedProvince" class="text-xs text-gray-500 mt-1">Loading cities...</div>
                <x-inputs.error errorName="selectedCity" />
            </div>

            <div>
                <x-inputs.select wire:model="selectedBarangay" :disabled="!$selectedCity">
                    <option value="">Select Barangay*</option>
                    @foreach($barangays as $barangay)
                    <option value="{{ $barangay->id }}">{{ $barangay->name }}</option>
                    @endforeach
                </x-inputs.select>
                <div wire:loading wire:target="selectedCity" class="text-xs text-gray-500 mt-1">Loading barangays...</div>
                <x-inputs.error errorName="selectedBarangay" />
            </div>

            <div>
                <x-inputs.text type="text" wire:model="postal_code" placeholder="Enter postal code*" maxlength="4" />  
                <x-inputs.error errorName="postal_code" />
            </div>
        </div>
    
        <div class="mt-8 flex justify-end">
            <x-buttons.primary wire:click="nextStep">Next</x-buttons.primary>
        </div>
    </div>
</div>

