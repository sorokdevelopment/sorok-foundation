<?php

namespace App\Livewire\Form;

use Livewire\Component;

class ChampionMembership extends Component
{
    public string $membership;
    public int $membershipId;
    public bool $agreed = false;


    public function mount()
    {
        $membership = session()->get('champion_membership')->name;
        $membershipId = session()->get('champion_membership')->value;
        $this->membership = $membership;
        $this->membershipId = $membershipId;

        $price = 0;
        
        if ($this->membershipId === 1) {
            $price = 100;
        } elseif ($this->membershipId === 2) {
            $price = 1000;
        } else {
            $price = 10000;
        }
    
        
        session()->put([
            'champion_membership_price' => $price
        ]);

    }

    
    /** 
     * 
     * Action Function for Next Step
     * 
     * @return void
     */
    public function nextStep(): void
    {
        $this->validate([
            'agreed' => 'accepted',
        ]);
        $this->dispatch('goToNextStep');
    }

    
    public function render()
    {
        return view('livewire.form.champion-membership');
    }
}
