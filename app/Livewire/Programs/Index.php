<?php

namespace App\Livewire\Programs;

use App\Models\Program;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Index extends Component
{


    public ?Collection $programs;


    public function mount() 
    {
        $this->programs = Program::query()->latest()->get() ?? null;
    }
    public function render()
    {
        return view('livewire.programs.index');
    }
}
