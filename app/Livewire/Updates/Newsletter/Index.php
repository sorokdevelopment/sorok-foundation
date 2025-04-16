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
        $this->latestNewsletter = Newsletter::query()->latest()->first();

        $newsletters = Newsletter::query()
            ->where('id', '!=', $this->latestNewsletter?->id)
            ->latest()
            ->paginate($this->limit);

        $hasMore = $newsletters->hasMorePages();

        return view('livewire.updates.newsletter.index', compact('newsletters', 'hasMore'));
    }
}
