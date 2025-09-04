<?php

namespace App\Contracts;

use App\Enums\PaymentPlanType;
use App\Enums\ChampionMembership;
use App\Enums\ScholarSponsorMembership;


interface PaymentInterface

{
    /**
     * 
     * @param array $userInfo   User details
     * @param $membership membership type
     * @param float $price      Payment amount
     * @param PlanType $planType Payment plan type
     * 
     * @return string
     */
    public function submit(array $userInfo, ChampionMembership|ScholarSponsorMembership $membership, float $price, PaymentPlanType $planType): string;

}


?>