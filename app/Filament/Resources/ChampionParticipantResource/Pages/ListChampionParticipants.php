<?php

namespace App\Filament\Resources\ChampionParticipantResource\Pages;

use App\Filament\Resources\ChampionParticipantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChampionParticipants extends ListRecords
{
    protected static string $resource = ChampionParticipantResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
