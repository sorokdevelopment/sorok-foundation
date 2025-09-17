<?php

namespace App\Livewire\Updates\Newsletter;

use Livewire\Component;
use App\Models\Newsletter;
use Illuminate\Support\Str;
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
        return view('livewire.updates.newsletter.newsletter-blog', [
            'newsletter' => $this->newsletter,
            'meta' => [
                'title' => $this->newsletter->title ?? 'Default Title',
                'description' => Str::limit(strip_tags($this->newsletter->description ?? ''), 160),
                'image' => $this->newsletter->thumbnail
                    ? asset('storage/' . $this->newsletter->thumbnail)
                    : null,
            ],
        ]);
    }
}
