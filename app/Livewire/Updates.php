<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;
use App\Models\Newsletter;
use App\Models\SocialMediaPosting;
use Illuminate\Support\Collection;

class Updates extends Component
{

    public function render()
    {
        return view('livewire.updates');
    }
}
