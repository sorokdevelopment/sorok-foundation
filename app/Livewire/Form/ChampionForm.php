<?php

namespace App\Livewire\Form;

use Livewire\Component;

class ChampionForm extends Component
{
    public array $steps;
    public int $currentStep = 1;

    protected $listeners = [
        'goToNextStep' => 'incrementStep',
        'refreshItem' => '$refresh'
    ];



     /**
     * 
     * Action Function for Increment Step
     */
    public function incrementStep(): void
    {
        if ($this->currentStep < count($this->steps)) {
            $this->currentStep++;
        }

    }

    public function mount()
    {

        $this->steps =  [
            ['number' => 1, 'label' => 'Mode'],
            ['number' => 2, 'label' => 'Details'],
            ['number' => 3, 'label' => 'Personal Info'],
            ['number' => 4, 'label' => 'Address'],
            ['number' => 5, 'label' => 'Payment'],
        ];
    }


    public function render()
    {
        return view('livewire.form.champion-form');
    }
}
