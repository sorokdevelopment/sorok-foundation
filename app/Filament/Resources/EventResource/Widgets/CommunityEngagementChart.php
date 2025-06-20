<?php

namespace App\Filament\Resources\EventResource\Widgets;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\EventForm;
use App\Enums\ChampionDecision;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class CommunityEngagementChart extends ChartWidget
{

    protected static ?string $heading = 'Event Sign-ups';
    
    public ?string $filter = null;
    

    protected function getFilters(): ?array
    {
        return Event::query()
            ->orderBy('start_at', 'desc')
            ->pluck('title', 'id')
            ->toArray() ?? 'Choose Event';
    }

    protected function getData(): array
    {
        $query = EventForm::query()
            ->select('decision', DB::raw('COUNT(*) as total'));
            
        if ($this->filter) {
            $query->where('event_id', $this->filter);
        }
     
        $decisionCounts = $query->groupBy('decision')->get();

        $data = array_fill_keys(array_column(ChampionDecision::cases(), 'value'), 0);

        
        foreach ($decisionCounts as $record) {
            $decision = is_int($record->decision) ? $record->decision : $record->decision->value;
            $data[$decision] = $record->total;
        }
        
        $eventTitle = $this->filter
            ? Event::find($this->filter)?->title 
            : 'All Events';

        return [
            'labels' => [
                ChampionDecision::UNDECIDED->name,
                ChampionDecision::GOING->name,
                ChampionDecision::NOTGOING->name,
            ],
            'datasets' => [
                [
                    'label' => "Sign-ups for {$eventTitle}",
                    'data' => [
                        $data[ChampionDecision::UNDECIDED->value],
                        $data[ChampionDecision::GOING->value],
                        $data[ChampionDecision::NOTGOING->value],
                    ],
                    'backgroundColor' => [
                        '#f59e0b', // yellow for undecided
                        '#00674F', // green for going
                        '#ef4444', // red for not going
                    ],
                    'borderColor' => [
                        '#eab308',
                        '#16a34a',
                        '#dc2626',
                    ],
                    'borderWidth' => 1,
                ],
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
            'scales' => [
                'y' => [
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
