<?php

namespace App\Livewire\Components\Card;

use Livewire\Component;

class Posting extends Component
{

    public string $image;
    public string $title;
    public string $link;
    public string $date;
    public string $description;
    public function render()
    {
        return view('livewire.components.card.posting');
    }
}
