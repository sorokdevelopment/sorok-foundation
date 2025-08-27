<?php

namespace App\Filament\Resources\ScholarSponsorResource\Widgets;

use App\Enums\ChampionStatus;
use App\Models\ScholarSponsor;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class SponsorStatOverview extends BaseWidget
{
    protected ?string $heading = 'Scholar Sponsor Analytics';
    protected ?string $description = 'Performance metrics and success rates';

    protected function getStats(): array
    {
        $totalScholarSponsors = ScholarSponsor::count();

        $growth = $this->calculateGrowth();

        return [
            Stat::make('Total Scholar Sponsors', $totalScholarSponsors)
                ->description('All registered scholar sponsors')
                ->icon('heroicon-m-users'),

                
            Stat::make('Monthly Growth', "{$growth}%")
                ->description('vs. last month')
                ->color($growth >= 0 ? 'success' : 'danger')
                ->icon($growth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down'),
        ];
    }
    private function calculateGrowth(): float
    {
        $current = ScholarSponsor::whereMonth('created_at', now()->month)->count();
        $previous = ScholarSponsor::whereMonth('created_at', now()->subMonth()->month)->count();
        return $previous > 0 ? round((($current - $previous) / $previous) * 100, 2) : 100;
    }

}
