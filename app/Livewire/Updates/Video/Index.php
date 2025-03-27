<?php

namespace App\Livewire\Updates\Video;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Collection;

class Index extends Component
{
    public function render()
    {
        $videos = Video::query()->latest()->get() ?? null;

        return view('livewire.updates.video.index', compact('videos'));
    }
}
