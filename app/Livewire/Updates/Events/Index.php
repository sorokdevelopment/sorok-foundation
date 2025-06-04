<?php

namespace App\Livewire\Updates\Events;

use App\Models\Event;
use Livewire\Component;

class Index extends Component
{

    public int $limit = 3;
    public bool $expanded = false;
    
    public function loadMore()
    {
        $this->expanded = true; 
        $this->limit += 4;
    }

    public function showLess()
    {
        $this->expanded = false;
        $this->limit = 3;
    }

    public function placeholder()
    {
        return view('skeletons.event');
    }

    public function render()
    {

        $events = Event::query()
            ->latest()
            ->paginate($this->limit);

        $hasMore = $events->hasMorePages();

        return view('livewire.updates.event.index', compact('events', 'hasMore'));
    }


}
