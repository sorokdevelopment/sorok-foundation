<?php

namespace App\Livewire\Components\Card;

use Livewire\Component;

class Programs extends Component
{
    public string $path = '';
    public function render()
    {
        return view('livewire.components.card.programs');
    }
}
