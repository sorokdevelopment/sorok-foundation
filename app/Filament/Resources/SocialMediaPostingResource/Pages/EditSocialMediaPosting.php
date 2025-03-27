<?php

namespace App\Filament\Resources\SocialMediaPostingResource\Pages;

use App\Filament\Resources\SocialMediaPostingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialMediaPosting extends EditRecord
{
    protected static string $resource = SocialMediaPostingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
