<?php

namespace App\Livewire;

use App\Models\Film;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')] 
class Home extends Component
{


    public string $filmTitle;

    public string $filmEmbedId;


    public function mount() 
    {
        $film = Film::query()->latest()->first();

        $this->filmTitle = $film->title ?? '';
        $this->filmEmbedId = $film->embedId ?? '';

    }

    public function render()
    {
        return view('livewire.home');
    }
}
