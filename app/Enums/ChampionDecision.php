<?php

namespace App\Enums;


enum ChampionDecision: int
{
    case UNDECIDED = 1;
    case GOING = 2;
    case NOTGOING = 3;
}