<?php

namespace App\Livewire\Form;

use Livewire\Component;

class ChampionForm extends Component
{
    public array $steps;
    public int $currentStep = 0;

    protected $listeners = [
        'goToNextStep' => 'incrementStep',
        'refreshItem' => '$refresh',
        'goToPreviousStep' => 'decrementStep'
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

        $allSteps = [
            ['number' => 0, 'label' => 'Champion'],
            ['number' => 1, 'label' => 'About'],
            ['number' => 2, 'label' => 'Profile Data'],
            ['number' => 3, 'label' => 'Payment'],
        ];
    
        $this->steps = collect($allSteps)->filter(function ($step) {
            return $step['number'] !== 0;
        })->values()->toArray();
    }

    public function decrementStep(): void
    {
        if ($this->currentStep > 0) {
            $this->currentStep--;
        }
    }


    public function render()
    {
        return view('livewire.form.champion-form');
    }
}
