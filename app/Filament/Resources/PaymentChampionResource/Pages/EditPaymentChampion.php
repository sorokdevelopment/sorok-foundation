<?php

namespace App\Filament\Resources\PaymentChampionResource\Pages;

use App\Filament\Resources\PaymentChampionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentChampion extends EditRecord
{
    protected static string $resource = PaymentChampionResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }
}
