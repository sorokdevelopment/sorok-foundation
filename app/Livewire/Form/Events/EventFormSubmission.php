<?php

namespace App\Livewire\Form\Events;

use App\Models\Event;
use Livewire\Component;
use App\Models\EventForm;
use Illuminate\Http\Request;
use App\Enums\ChampionDecision;
use App\Enums\ChampionStatus;
use Illuminate\Validation\Rule;

class EventFormSubmission extends Component
{

    public Event $event;
    public array $championDecision;
    
    // Form fields
    public string $full_name = '';
    public string $email = '';
    public string $contact_number = '';
    public int $action;
    public string $notes = '';


    public function mount(Request $request)
    {

        $this->event = Event::where('slug', $request->event->slug)->firstOrFail();

        $this->championDecision = ChampionDecision::cases();
    }


    protected function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'max:100', 'email', 
                Rule::unique('event_forms', 'email')->where('event_id', $this->event->id), 
                Rule::exists('champions', 'email')->where(function ($query) {
                    $query->where('status', ChampionStatus::ACTIVE->value);
                })
            ],
            'contact_number' => ['required', 'regex:/^(09|\+639|9)\d{9}$/'],
            'action' => [
                'required',
                Rule::in(collect($this->championDecision)->pluck('value')->toArray())
            ],
            'notes' => ['nullable', 'string', 'max:500'],
        ];
    }


    public function messages()
    {
        return [
            'email.exists' => 'This email is not registered as a champion or not active. Register first!',
            'email.unique' => 'You’ve already registered for this event.',
        ];
    }

    public function render()
    {
        return view('livewire.form.events.event-form-submission');
    }


    public function submit()
    {
        $this->validate();
        
        try {
            EventForm::query()->create([
                'event_id' => $this->event->id,
                'name' => $this->full_name,
                'email' => $this->email,
                'contact_number' => $this->contact_number,
                'decision' => ChampionDecision::from($this->action),
                'notes' => $this->notes,
            ]);
            
                
            $this->dispatch('alert', [
                'title' => 'Thank You, Champion!',
                'type' => 'success',
                'message' => 'Your registration for "'.$this->event->title.'" has been received. We look forward to seeing you at the venue!',
            ]);

            $this->full_name = '';
            $this->email = '';
            $this->contact_number = '';
            $this->action;
            $this->notes = '';


            
            
        } catch (\Exception $e) {
            $this->dispatch('alert', [
                'title' => 'Submission Error',
                'type' => 'danger',
                'message' => 'We encountered an issue processing your registration. Please try again or contact support if the problem persists.',
            ]);
        }
    }



}
