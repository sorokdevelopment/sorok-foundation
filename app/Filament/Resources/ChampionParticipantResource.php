<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\EventForm;
use Filament\Tables\Table;
use App\Enums\ChampionDecision;
use Filament\Resources\Resource;
use App\Models\ChampionParticipant;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ChampionParticipantResource\Pages;
use App\Filament\Resources\ChampionParticipantResource\RelationManagers;

class ChampionParticipantResource extends Resource
{
    protected static ?string $model = EventForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationGroup = 'User Management';
    protected static ?string $navigationLabel = 'Champion Participant';
    protected static ?string $modelLabel = 'Participant';
    protected static ?string $slug = 'champion-participants';




    public static function getNavigationBadge(): ?string
    {
        return cache()->remember('participant-count', now()->addMinutes(10), fn () => static::getModel()::count());

    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-user-plus')
            ->emptyStateDescription('No participant yet.')
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('event.title')
                    ->label('Event')
                    ->sortable()
                    ->searchable()
                    ->url(fn (EventForm $record) => EventResource::getUrl('edit', ['record' => $record->event])),
                TextColumn::make('contact_number')
                    ->label('Contact Number'),
                TextColumn::make('decision')
                    ->label('Action')
                    ->formatStateUsing(fn ($state) => $state?->name ?? '')
                    ->badge()
                    ->color(fn ($state) => match($state) {
                        ChampionDecision::GOING => 'success',
                        ChampionDecision::NOTGOING => 'danger',
                        ChampionDecision::UNDECIDED => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('notes')
                    ->label('Message')
                    ->limit(50)
                    ->tooltip(fn (TextColumn $column) => $column->getState()),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->date('F j, Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListChampionParticipants::route('/'),
        ];
    }
}
