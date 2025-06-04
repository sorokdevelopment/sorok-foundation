<?php

namespace App\Filament\Resources\ChampionResource\Widgets;

use App\Models\Champion;
use App\Enums\ChampionMembership;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class ChampionChart extends ChartWidget
{
    protected static ?string $heading = 'Champion Membership Type';
    protected static ?string $maxHeight = '400px';
    
    public ?string $filter = null; 

    protected function getFilters(): ?array
    {
        return [
            'monthly' => 'Monthly',
            'yearly' => 'Yearly',
        ];
    }

    protected function getData(): array
    {
        $groupBy = $this->filter === 'yearly' ? 'YEAR(created_at)' : 'DATE_FORMAT(created_at, "%Y-%m")';
        $dateFormat = $this->filter === 'yearly' ? 'Y' : 'M Y';
        
        $membershipTypes = ChampionMembership::cases();
        
        $query = Champion::query()
            ->select(
                DB::raw($groupBy . ' as period'),
                'membership',
                DB::raw('COUNT(*) as count')
            )
            ->groupBy('period', 'membership')
            ->orderBy('period');
            
        $results = $query->get();
        
        $periods = $results->pluck('period')->unique()->sort()->values();
        
        $datasets = [];
        $colors = [
            '#3b82f6', // blue - Awareness
            '#00674F', // green - Empowerment
            '#f59e0b', // yellow - Sustainability
        ];
        
        foreach ($membershipTypes as $index => $type) {
            $typeData = [];
            
            foreach ($periods as $period) {
                $count = $results->where('period', $period)
                                ->where('membership', $type->value)
                                ->first()
                                ?->count ?? 0;
                $typeData[] = $count;
            }
            
            $datasets[] = [
                'label' => $type->name,
                'data' => $typeData,
                'backgroundColor' => $colors[$index],
                'borderColor' => $colors[$index],
                'borderWidth' => 1,
            ];
        }
        
        $labels = $periods->map(function ($period) use ($dateFormat) {
            if ($this->filter === 'yearly') {
                return $period; 
            }
            return date($dateFormat, strtotime($period . '-01'));
        });

        return [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; 
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'scales' => [
                'x' => [
                    'stacked' => true,
                    'grid' => [
                        'display' => false,
                    ],
                ],
                'y' => [
                    'stacked' => true,
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                        'precision' => 0,
                    ],
                ],
            ],
        ];
    }
}
