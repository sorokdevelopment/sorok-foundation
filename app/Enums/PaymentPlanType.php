<?php

namespace App\Enums;


enum PaymentPlanType: string
{
    case MONTHLY = 'monthly';
    case ANNUALLY = 'annually';
}