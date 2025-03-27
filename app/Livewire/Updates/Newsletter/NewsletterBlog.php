<?php

namespace App\Livewire\Updates\Newsletter;

use Livewire\Component;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterBlog extends Component
{


    public string $slug;
    public ?Newsletter $newsletter = null;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->newsletter = Newsletter::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.updates.newsletter.newsletter-blog');
    }
}
