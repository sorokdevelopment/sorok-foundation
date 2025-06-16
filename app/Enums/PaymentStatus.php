<?php

namespace App\Enums;


enum PaymentStatus: int
{
    case COMPLETED = 1;
    case FAILED = 2;
    case PENDING = 3;
}