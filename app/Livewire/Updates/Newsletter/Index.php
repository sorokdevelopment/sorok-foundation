<?php

namespace App\Livewire\Updates\Newsletter;

use Livewire\Component;
use App\Models\Newsletter;
use Livewire\WithPagination;

class Index extends Component
{

    public int $limit = 3;
    public bool $expanded = false;
    public ?Newsletter $latestNewsletter = null;
    
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
        return view('skeletons.newsletter');
    }

    public function render()
    {
        $newsletters = Newsletter::query()->latest()->skip(1)->paginate($this->limit);
        $this->latestNewsletter = Newsletter::query()->latest()->first();
        $hasMore = Newsletter::query()->count() > $this->limit;

        return view('livewire.updates.newsletter.index', compact('newsletters', 'hasMore'));
    }
}
