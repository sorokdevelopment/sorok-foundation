<?php

namespace App\Livewire\Form;

use Livewire\Component;
use App\Enums\ChampionMembership;

class ChampionDetails extends Component
{
    public function render()
    {
        return view('livewire.form.champion-details');
    }



    /**
     * 
     * Action Function for Next Step
     * 
     * @return void
     */
    public function nextStep(int $value): void
    {
        session()->put('champion_membership', ChampionMembership::from($value));
        $this->dispatch('goToNextStep');
    }

}
