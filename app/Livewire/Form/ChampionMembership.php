<?php

namespace App\Livewire\Form;

use Livewire\Component;

class ChampionMembership extends Component
{
    public string $membership;

    public function mount()
    {
        $membership = session()->get('champion_membership')->name;
        $this->membership = $membership;

    }

    
    /** 
     * 
     * Action Function for Next Step
     * 
     * @return void
     */
    public function nextStep(): void
    {
        $this->dispatch('goToNextStep');
    }

    
    public function render()
    {
        return view('livewire.form.champion-membership');
    }
}
