<?php

namespace App\Filament\Resources\EventResource\Widgets;

use App\Models\Event;
use App\Models\EventForm; // Use EventForm, not Event!
use Illuminate\Support\Carbon;
use App\Enums\ChampionDecision;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class EventSignUpTrendsChart extends ChartWidget
{
    protected static ?string $heading = 'Daily Sign-up Event';

    public ?string $filter = 'week'; 

    protected int | string | array $columnSpan = 'full';



    
    protected function getFilters(): ?array
    {
        return [
            'week' => 'Last 7 Days',
            'month' => 'Last 30 Days',
        ];
    }


    protected function getData(): array
    {
        $query = EventForm::where('decision', ChampionDecision::GOING->value);


        $dateThreshold = match ($this->filter) {
            'week' => now()->subDays(7),
            'month' => now()->subDays(30),
            default => now()->subYear(),
        };

        $records = $query
            ->whereDate('created_at', '>=', $dateThreshold)
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();
        $dates = collect();
        $startDate = Carbon::parse($dateThreshold);
        $endDate = now();

        while ($startDate <= $endDate) {
            $dates->push($startDate->format('Y-m-d'));
            $startDate->addDay();
        }

        $filledData = $dates->mapWithKeys(function ($date) use ($records) {
            $record = $records->firstWhere('date', $date);
            return [$date => $record ? $record->total : 0];
        });

        return [
            'labels' => $dates->map(fn ($date) => Carbon::parse($date)->format('M d'))->toArray(),
            'datasets' => [
                [
                    'label' => 'Daily Sign-ups (Going)',
                    'data' => $filledData->values()->toArray(),
                    'borderColor' => '#00674F',
                    'backgroundColor' => 'rgba(0, 103, 79, 0.1)',
                    'borderWidth' => 2,
                    'tension' => 0.1,
                    'fill' => true,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'precision' => 0,
                    ],
                ],
            ],
        ];
    }
}
