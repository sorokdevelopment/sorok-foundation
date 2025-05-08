<?php

namespace App\Livewire\Form;

use Livewire\Component;
use Yajra\Address\Entities\City;
use Yajra\Address\Entities\Region;
use Yajra\Address\Entities\Barangay;
use Yajra\Address\Entities\Province;

class UserAddress extends Component
{
    public $regions;
    public $provinces = [];
    public $cities = [];
    public $barangays = [];
    
    public $street = '';
    public $postal_code = '';
    public $selectedRegion = null;
    public $selectedProvince = null;
    public $selectedCity = null;
    public $selectedBarangay = null;
    
    public array $championAddress;


    public function rules()
    {
        return [
            'street' => 'required|string|max:255',
            'postal_code' => 'required',
            'selectedRegion' => 'required|exists:regions,id',
            'selectedProvince' => 'required',
            'selectedCity' => 'required',
            'selectedBarangay' => 'required',
        ];
    }

    
    public function validationAttributes()
    {
        return [
            'selectedRegion' => 'region',
            'selectedProvince' => 'province',
            'selectedCity' => 'city',
            'selectedBarangay' => 'barangay',
        ];
    }


    public function mount()
    {
        $this->regions = Region::all();
        $this->championAddress = session()->get('champion_address', []);


    }

    public function updatedSelectedRegion($regionId)
    {
        if (empty($regionId)) {
            $this->provinces = [];
            return;
        }

        $regionId = (int)$regionId;
        $this->provinces = Province::where('region_id', $regionId)->get();
                    
        $this->reset(['selectedProvince', 'cities', 'selectedCity', 'barangays', 'selectedBarangay']);
    }

    public function updatedSelectedProvince(int $provinceId)
    {
        if (empty($provinceId)) {
            $this->cities = [];
            return;
        }

        $this->cities = City::where('province_id', $provinceId)
            ->get();
            
        $this->reset(['selectedCity', 'barangays', 'selectedBarangay']);
    }

    public function updatedSelectedCity(int $cityId)
    {
        if (empty($cityId)) {
            $this->barangays = [];
            $this->selectedBarangay = null;
            return;
        }


        $this->barangays = Barangay::where('city_id', $cityId)
            ->orderBy('name')
            ->get();
    }


    /**
     * 
     * Action Function for Next Step
     * 
     * @return void
     */
    public function nextStep(): void
    {
        $this->validate();

        session()->put('champion_address', [
            'street' => $this->street,
            'region_id' => $this->selectedRegion,
            'province_id' => $this->selectedProvince,
            'city_id' => $this->selectedCity,
            'barangay_id' => $this->selectedBarangay,
            'postal_code' => $this->postal_code
        ]);

        $this->dispatch('goToNextStep');
    }



    public function render()
    {
        return view('livewire.form.user-address');
    }
}
