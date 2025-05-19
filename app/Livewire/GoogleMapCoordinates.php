<?php

namespace App\Livewire;

use Livewire\Component;

class GoogleMapCoordinates extends Component
{

    public $lat = 14.590516178836;
    public $lng = 121.00290838657;



    public function render()
    {
        return view('livewire.google-map-coordinates');
    }
}
