<?php

namespace App\Filament\Resources\ScholarSponsorResource\Pages;

use App\Filament\Resources\ScholarSponsorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScholarSponsor extends EditRecord
{
    protected static string $resource = ScholarSponsorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
