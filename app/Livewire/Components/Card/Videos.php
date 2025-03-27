<?php

namespace App\Livewire\Components\Card;

use Livewire\Component;

class Videos extends Component
{

    public string $title;
    public string $embedId;
    public function render()
    {
        return view('livewire.components.card.videos');
    }
}
