<?php

namespace App\Livewire\Components\Card;

use Livewire\Component;

class Programs extends Component
{
    public string $title = '';
    public string $image = '';
    public string $description = '';

    public function render()
    {
        return view('livewire.components.card.programs');
    }
}
