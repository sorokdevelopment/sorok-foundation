<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Community Engagements';


    public static function getNavigationBadge(): ?string
    {
        return cache()->remember('event-count', now()->addMinutes(10), fn () => static::getModel()::count());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->maxLength(255)
                ->label('Event Title')
                ->placeholder('Enter event title'),

                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated(),

                TextInput::make('location')
                    ->required()
                    ->maxLength(255)
                    ->label('Location')
                    ->placeholder('Enter event location'),

                TextInput::make('type_of_events')
                    ->required()
                    ->maxLength(255)
                    ->label('Category')
                    ->placeholder('Enter event type'),

                DateTimePicker::make('start_at')
                    ->required()
                    ->label('Date and Time'),

                Textarea::make('description')
                    ->required()
                    ->rows(4)
                    ->placeholder('Write a description')
                    ->label('Description')
                    ->columnSpan('full'),

               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-calendar-days')
            ->emptyStateDescription('Once you write your first event, it will appear here.')
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->limit(30)
                    ->searchable()
                    ->tooltip(fn ($record) => $record->title),
                TextColumn::make('type_of_events')
                    ->label('Category')
                    ->badge()
                    ->color('success')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('location')
                    ->sortable(),
                TextColumn::make('description')
                    ->limit(30)
                    ->tooltip(fn ($record) => $record->description),
                TextColumn::make('start_at')
                    ->label('Date and Time')
                    ->sortable()
                    ->date('F j, Y - g:i A')
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
                ->tooltip('Actions')
                ->color('info')

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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
