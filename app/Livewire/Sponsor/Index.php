<?php

namespace App\Livewire\Sponsor;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Index extends Component
{

    public ?Collection $sponsors;
    
    public function render()
    {
        return view('livewire.sponsor.index');
    }
}
