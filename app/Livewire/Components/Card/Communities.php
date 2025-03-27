<?php

namespace App\Livewire\Components\Card;

use Livewire\Component;

class Communities extends Component
{

    public string $title;
    public string $imgName;
    public string $description;

    public function render()
    {
        return view('livewire.components.card.communities');
    }
}
