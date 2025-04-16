<?php

namespace App\Livewire\Updates\Posting;

use Livewire\Component;
use App\Models\SocialMediaPosting;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class Index extends Component
{

    public int $limit = 4;
    public bool $expanded = false;


    public function loadMore()
    {
        $this->expanded = true;
        $this->limit += 4;
    }

    public function showLess()
    {
        $this->expanded = false;
        $this->limit = 4;
    }

    public function placeholder()
    {
        return view('skeletons.posting');
    }

    public function render()
    {
        $postings = SocialMediaPosting::query()->latest()->paginate($this->limit);
        $hasMore = $postings->hasMorePages();


        return view('livewire.updates.posting.index', compact('postings', 'hasMore'));
    }
}
