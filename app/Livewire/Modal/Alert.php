<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class Alert extends Component
{

    public string $type = '';
    public string $message = '';
    public string $title = '';
    public bool $show = false;

    protected $listeners = ['alert' => 'show'];


    public function show($payload): void
    {
        $this->type = $payload['type'];
        $this->message = $payload['message'];
        $this->title = $payload['title'];
        $this->show = true;
    }


    public function render()
    {
        return view('livewire.modal.alert');
    }
}
