<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Film;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FilmResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FilmResource\RelationManagers;

class FilmResource extends Resource
{
    protected static ?string $model = Film::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';
    protected static ?string $navigationGroup = 'Media';


    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
           TextInput::make('title')
                ->required()
                ->placeholder('Enter a title')
                ->maxLength(255),
           TextInput::make('embedId')
                ->label('YouTube Video URL')
                ->placeholder('Enter a YouTube link')
                ->required()
                ->afterStateUpdated(fn ($state, callable $set) => 
                    $set('embedId', self::extractYouTubeId($state))
                ),
        ]);
    }


    /**
     * Extracts the YouTube video ID from various YouTube URL formats.
     * 
     * @param $url 
     * @return ?string
     */
    public static function extractYouTubeId($url): ?string
    {
        preg_match('/(?:youtu\.be\/|youtube\.com\/(?:.*v=|embed\/|v\/|.*[?&]v=))([A-Za-z0-9_-]{11})/', $url, $matches);
        return $matches[1] ?? null;
    }

    

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-film')
            ->emptyStateDescription('Once you write your first film, it will appear here.')
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->tooltip(fn ($record) => $record->title),
                TextColumn::make('embedId'),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->date('F j, Y'),

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
            'index' => Pages\ListFilms::route('/'),
            'create' => Pages\CreateFilm::route('/create'),
            'edit' => Pages\EditFilm::route('/{record}/edit'),
        ];
    }
}
