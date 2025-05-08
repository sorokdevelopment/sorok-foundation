<?php

namespace App\Livewire\Components;

use Livewire\Component;

class StepIndicator extends Component
{
    public array $steps;
    public int $currentStep;

    public function mount(array $steps, int $currentStep)
    {
        $this->steps = $steps;
        $this->currentStep = $currentStep;
    }
    public function render()
    {
        return view('livewire.components.step-indicator');
    }
}
