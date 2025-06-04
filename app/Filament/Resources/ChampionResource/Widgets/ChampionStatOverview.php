<?php

namespace App\Filament\Resources\ChampionResource\Widgets;

use App\Models\User;
use App\Models\Champion;
use App\Models\EventForm;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ChampionStatOverview extends BaseWidget
{
    protected ?string $heading = 'User Management';
    protected ?string $description = 'An overview of champions';



    protected function getStats(): array
    {
        return [
            Stat::make('Total Champions', Champion::query()->count())
                ->description('All registered champions')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Total Champions Participants', EventForm::query()->count())
                ->description('All registered champions participants')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 5, 15, 5, 10, 4, 17])
                ->color('success'),
            Stat::make('Total Admins', User::query()->count())
                ->description('All registered admin')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 15, 10, 3, 15, 4, 17])
                ->color('success'),

        ];
    }
    
}
