<?php

namespace App\Enums;


enum ScholarSponsorMembership: int
{
    case DREAM = 1;
    case FAITH = 2;

    public function label(): string
    {
        return match ($this) {
            self::DREAM => 'Dream',
            self::FAITH => 'Faith',
        };
    }

    public function price(): int
    {
        return match ($this) {
            self::DREAM => 6500,
            self::FAITH => 1500,
        };
    }
}