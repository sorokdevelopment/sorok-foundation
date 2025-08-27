<?php

namespace App\Filament\Resources\ScholarSponsorResource\Widgets;

use App\Models\ScholarSponsor;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use App\Enums\ScholarSponsorMembership;
use Carbon\Carbon;

class ScholarSponsorChart extends ChartWidget
{
    protected static ?string $heading = 'Scholar Sponsor Membership Trends';
    protected static ?string $description = 'Track membership growth and distribution over time';
    
    public ?string $filter = 'monthly';
    protected static ?int $sort = 2;
    protected static bool $isLazy = false;
    
    protected int | string | array $columnSpan = 2;

    protected function getFilters(): ?array
    {
        return [
            'weekly' => 'Last 8 Weeks',
            'monthly' => 'Last 12 Months',
            'yearly' => 'Yearly View',
            'quarterly' => 'Quarterly View',
        ];
    }

    protected function getData(): array
    {
        $membershipTypes = ScholarSponsorMembership::cases();
        
        [$periods, $groupBy, $dateFormat] = $this->getPeriodConfiguration();
        
        $query = ScholarSponsor::query()
            ->select(
                DB::raw($groupBy . ' as period'),
                'membership',
                DB::raw('COUNT(*) as count')
            )
            ->where('created_at', '>=', $periods['start'])
            ->groupBy('period', 'membership')
            ->orderBy('period');
            
        $results = $query->get();
        
        $allPeriods = $this->generatePeriodRange($periods['start'], $periods['end']);
        
        $datasets = [];
        $colors = $this->getMembershipColors();
        
        foreach ($membershipTypes as $index => $type) {
            $typeData = [];
            
            foreach ($allPeriods as $period) {
                $count = $results->where('period', $period)
                                ->where('membership', $type->value)
                                ->first()
                                ?->count ?? 0;
                $typeData[] = $count;
            }
            
            $datasets[] = [
                'label' => $type->name,
                'data' => $typeData,
                'backgroundColor' => $colors[$index]['bg'],
                'borderColor' => $colors[$index]['border'],
                'borderWidth' => 2,
                'hoverBackgroundColor' => $colors[$index]['hover'],
                'borderRadius' => 4,
                'borderSkipped' => false,
            ];
        }
        
        $labels = $this->formatPeriodLabels($allPeriods);

        return [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    }

    protected function getPeriodConfiguration(): array
    {
        $now = Carbon::now();
        
        return match($this->filter) {
            'weekly' => [
                [
                    'start' => $now->copy()->subWeeks(7)->startOfWeek(),
                    'end' => $now->copy()->endOfWeek()
                ],
                'YEARWEEK(created_at, 1)',
                'W Y'
            ],
            'quarterly' => [
                [
                    'start' => $now->copy()->subYears(2)->startOfQuarter(),
                    'end' => $now->copy()->endOfQuarter()
                ],
                'CONCAT(YEAR(created_at), "-Q", QUARTER(created_at))',
                'Q Y'
            ],
            'yearly' => [
                [
                    'start' => $now->copy()->subYears(4)->startOfYear(),
                    'end' => $now->copy()->endOfYear()
                ],
                'YEAR(created_at)',
                'Y'
            ],
            default => [ 
                [
                    'start' => $now->copy()->subMonths(11)->startOfMonth(),
                    'end' => $now->copy()->endOfMonth()
                ],
                'DATE_FORMAT(created_at, "%Y-%m")',
                'M Y'
            ]
        };
    }

    protected function generatePeriodRange(Carbon $start, Carbon $end): array
    {
        $periods = [];
        $current = $start->copy();
        
        while ($current <= $end) {
            $periods[] = match($this->filter) {
                'weekly' => $current->format('oW'),
                'quarterly' => $current->format('Y') . '-Q' . $current->quarter,
                'yearly' => $current->format('Y'),
                default => $current->format('Y-m') 
            };
            
            $current = match($this->filter) {
                'weekly' => $current->addWeek(),
                'quarterly' => $current->addQuarter(),
                'yearly' => $current->addYear(),
                default => $current->addMonth()
            };
        }
        
        return $periods;
    }

    protected function formatPeriodLabels(array $periods): array
    {
        return array_map(function ($period) {
            return match($this->filter) {
                'weekly' => 'Week ' . substr($period, -2) . ', ' . substr($period, 0, 4),
                'quarterly' => str_replace('-Q', ' Q', $period),
                'yearly' => $period,
                default => Carbon::createFromFormat('Y-m', $period)->format('M Y')
            };
        }, $periods);
    }

    protected function getMembershipColors(): array
    {
        return [
            [ 
                'bg' => 'rgba(59, 130, 246, 0.8)',
                'border' => 'rgb(59, 130, 246)',
                'hover' => 'rgba(59, 130, 246, 1)',
            ],
            [ 
                'bg' => 'rgba(0, 103, 79, 0.8)',
                'border' => 'rgb(0, 103, 79)',
                'hover' => 'rgba(0, 103, 79, 1)',
            ],
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
            'animation' => [
                'duration' => 750,
                'easing' => 'easeInOutQuart',
            ],
        ];
    }
}