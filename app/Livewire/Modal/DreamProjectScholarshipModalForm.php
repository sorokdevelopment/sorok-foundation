<?php

namespace App\Livewire\Modal;

use Livewire\Component;
use App\Enums\ChampionStatus;
use App\Models\ScholarSponsor;
use App\Enums\ScholarSponsorMembership;

class DreamProjectScholarshipModalForm extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $contact_number = '';

    public bool $agreed = false;

    public int $membership;






    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'max:100', 'email', 'unique:scholar_sponsors,email'],
            'contact_number' => ['required', 'regex:/^(09|\+639|9)\d{9}$/'],
            'membership' => ['required', 'in:1,2'],
            'agreed' => ['required', 'accepted'],
        ];
    }
    public function messages()
    {
        return [
            'contact_number.regex' => 'The contact number must be a valid mobile number.',
            'membership.required' => 'Please select a sponsorship level.',
            'membership.in' => 'Please select a valid sponsorship level.',
            'agreed.accepted' => 'You must agree to the privacy policy to continue.',
        ];
    }


    public function render()
    {
        return view('livewire.modal.dream-project-scholarship-modal-form');
    }


    public function submit() {

        $this->validate();


        ScholarSponsor::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'contact_number' => $this->contact_number,
            'membership' => $this->membership,
            'status' => ChampionStatus::ACTIVE,
        ]);

        $this->reset(['first_name', 'last_name', 'email', 'contact_number', 'membership', 'agreed']);


        $this->dispatch('alert', [
            'title' => 'Thank you!',
            'type' => 'success',
            'message' => 'Your application has been submitted successfully.',
        ]);
    }
}
