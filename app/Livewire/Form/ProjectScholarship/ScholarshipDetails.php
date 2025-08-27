<?php

namespace App\Livewire\Form\ProjectScholarship;

use Livewire\Component;
use App\Enums\ScholarSponsorMembership;

class ScholarshipDetails extends Component
{

    public string $membership;
    public int $membershipId;
    public bool $agreed = false;

    
    public function render()
    {
        return view('livewire.form.project-scholarship.scholarship-details');
    }


    /** 
     * 
     * Action Function for Next Step
     * 
     * @return void
     */
    public function nextStep(int $value): void
    {
        $membershipEnum = ScholarSponsorMembership::from($value);
        session()->put('scholar_sponsor_membership', $membershipEnum);

        $priceMap = [
            ScholarSponsorMembership::DREAM->value => 100,
            ScholarSponsorMembership::FAITH->value => 1000,
        ];
        session()->put('scholar_sponsor_membership_price', $priceMap[$membershipEnum->value] ?? 0);
        $this->dispatch('goToNextStep');
    }
}
