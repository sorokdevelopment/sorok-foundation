<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Program;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProgramResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProgramResource\RelationManagers;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Posting';

    public static function getNavigationBadge(): ?string
    {
        return cache()->remember('program-count', now()->addMinutes(10), fn () => static::getModel()::count());
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->label('Title')
                ->placeholder('Enter program title')
                ->columnSpan('full'),
                
                Textarea::make('description')
                    ->required()
                    ->rows(4)
                    ->placeholder('Write a program description')
                    ->label('Description')
                    ->columnSpan('full'),

                FileUpload::make('image')
                    ->directory('programs')
                    ->image()
                    ->previewable(false)
                    ->imageEditor()
                    ->required()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->maxSize(2048)
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-rectangle-stack')
            ->emptyStateDescription('Once you write your first program, it will appear here.')
            ->columns([
                ImageColumn::make('image')
                    ->size(50),
                TextColumn::make('title')
                    ->sortable()
                    ->limit(30)
                    ->searchable()
                    ->tooltip(fn ($record) => $record->title),
                TextColumn::make('description')
                    ->limit(30)
                    ->tooltip(fn ($record) => $record->description),
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
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }
}
