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
