<?php

namespace App\Livewire\Form;

use Livewire\Component;
use App\Models\Champion;

class ChampionPayment extends Component
{

 

    public function render()
    {
        return view('livewire.form.champion-payment');
    }


    public function submit()
    {
        if (!session()->has('champion_info') || !session()->has('champion_address') || !session()->has('champion_membership')) {
            return to_route('home');

        }
        
        $info = session()->get('champion_info');
        $address = session()->get('champion_address');
        $member = session()->get('champion_membership')->value;

        $champion = Champion::create([
            'first_name'     => $info['first_name'],
            'last_name'      => $info['last_name'],
            'email'          => $info['email'],
            'contact_number' => $info['contact_number'],
            'birthdate'      => $info['birthdate'],
            'street'         => $address['street'],
            'region_id'      => $address['region_id'],
            'province_id'    => $address['province_id'],
            'city_id'        => $address['city_id'],
            'barangay_id'    => $address['barangay_id'],
            'postal_code'    => $address['postal_code'],
            'membership'     => $member
        ]);

        // $this->dispatch('refreshItem');


        $this->dispatch('alert', [
            'title' => 'Thank You, Champion!',
            'type' => 'success',
            'message' => 'You are now officially a Champion of the SOROK UNI Foundation. Welcome aboard!',
        ]);

        $this->dispatch('delayed-redirect');

                
        session()->forget(['champion_info', 'champion_address', 'champion_membership']);
        return $champion;
    }
}
