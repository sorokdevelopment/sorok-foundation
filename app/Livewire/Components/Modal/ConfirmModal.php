<?php

namespace App\Livewire\Components\Modal;

use Livewire\Component;
use Livewire\Attributes\On;

class ConfirmModal extends Component
{


    public string $title = '';
    public string $description = '';
    public bool $open = false;


    public function render()
    {
        return view('livewire.components.modal.confirm-modal');
    }


    #[On('confirm-dialog')]
    public function show(array $payload)
    {
        $this->title = $payload['title'];
        $this->description = $payload['description'];
        $this->open = true;
    }

    public function confirm()
    {
        $this->dispatch('confirmed-action');
        $this->open = false;
    }

    public function cancel()
    {
        $this->open = false;
    }
}
