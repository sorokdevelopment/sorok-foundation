<?php

namespace App\Filament\Resources\ChampionResource\Widgets;

use App\Models\User;
use App\Models\Champion;
use App\Models\EventForm;
use App\Enums\ChampionStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ChampionStatOverview extends BaseWidget
{
    protected ?string $heading = 'Champion Analytics';
    protected ?string $description = 'Performance metrics and success rates';

    protected function getStats(): array
    {
        $totalChampions = Champion::count();
        $activeChampions = Champion::where('status', ChampionStatus::ACTIVE)->count();
        $eventParticipants = EventForm::count();

        $activationRate = $this->calculateRate($activeChampions, $totalChampions);
        $participationRate = $this->calculateRate($eventParticipants, $totalChampions);

        $growth = $this->calculateGrowth();

        return [
            Stat::make('Total Champions', $totalChampions)
                ->description('All registered users')
                ->icon('heroicon-m-users'),

            Stat::make('Activation Rate', "{$activationRate}%")
                ->description('Active champions')
                ->color($activationRate >= 70 ? 'success' : 'warning')
                ->chart($this->getActivationTrend()),
                
            Stat::make('Monthly Growth', "{$growth}%")
                ->description('vs. last month')
                ->color($growth >= 0 ? 'success' : 'danger')
                ->icon($growth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down'),
        ];
    }

    private function calculateRate(int $numerator, int $denominator): float
    {
        return $denominator > 0 ? round(($numerator / $denominator) * 100, 2) : 0;
    }

    private function calculateGrowth(): float
    {
        $current = Champion::whereMonth('created_at', now()->month)->count();
        $previous = Champion::whereMonth('created_at', now()->subMonth()->month)->count();
        return $previous > 0 ? round((($current - $previous) / $previous) * 100, 2) : 100;
    }

    private function getActivationTrend(): array
    {
        return Champion::query()
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('count')
            ->toArray();
    }
}