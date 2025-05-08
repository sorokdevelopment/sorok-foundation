<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class Advertise extends Component
{

    public $showModal = false;

    public function mount()
    {
        if (!session()->has('seen_modal')) {
            $this->showModal = true;
            session()->put('seen_modal', true);
        }
    }


    public function render()
    {
        return view('livewire.modal.advertise');
    }
}
