<?php

namespace App\Livewire;

use App\Models\Film;
use App\Models\Program;
use App\Models\Sponsor;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Database\Eloquent\Collection;

#[Layout('components.layouts.app')] 
class Home extends Component
{


    public string $filmTitle;

    public string $filmEmbedId;

    public ?Film $film;
    public ?Collection $programs;

    public ?Collection $sponsors;


    public function mount() 
    {
        $this->film = Film::query()->latest()->first() ?? null;
        $this->programs = Program::query()->latest()->get() ?? null;

        $this->sponsors = Sponsor::query()->latest()->get() ?? null;
        

        $this->filmTitle = $this->film->title ?? '';
        $this->filmEmbedId = $this->film->embedId ?? '';

    }

    public function render()
    {
        return view('livewire.home');
    }
}
