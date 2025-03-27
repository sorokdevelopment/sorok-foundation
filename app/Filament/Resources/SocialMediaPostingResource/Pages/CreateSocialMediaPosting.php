<?php

namespace App\Filament\Resources\SocialMediaPostingResource\Pages;

use App\Filament\Resources\SocialMediaPostingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialMediaPosting extends CreateRecord
{
    protected static string $resource = SocialMediaPostingResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
