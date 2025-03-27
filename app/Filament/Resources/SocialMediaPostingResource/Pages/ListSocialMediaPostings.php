<?php

namespace App\Filament\Resources\SocialMediaPostingResource\Pages;

use App\Filament\Resources\SocialMediaPostingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocialMediaPostings extends ListRecords
{
    protected static string $resource = SocialMediaPostingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
