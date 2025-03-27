<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\SocialMediaPosting;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\DateColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SocialMediaPostingResource\Pages;
use App\Filament\Resources\SocialMediaPostingResource\RelationManagers;

class SocialMediaPostingResource extends Resource
{
    protected static ?string $model = SocialMediaPosting::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    protected static ?string $navigationGroup = 'Posting';


    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationLabel = 'Facebook Posting';

    protected static ?string $modelLabel = 'Facebook Posting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Title')
                    ->placeholder('Enter post title'),

                TextInput::make('link')
                    ->required()
                    ->url()
                    ->label('Link')
                    ->placeholder('https://example.com'),

                Textarea::make('description')
                    ->required()
                    ->rows(4)
                    ->placeholder('Write a short post description')
                    ->label('Description'),

                DatePicker::make('published_at')
                    ->label('Published Date')
                    ->required() 
                    ->rules(['date']),

                FileUpload::make('image')
                    ->directory('social-media-images')
                    ->image()
                    ->imageEditor()
                    ->required()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->maxSize(2048)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                TextColumn::make('link')
                    ->url(fn ($record) => $record->link)
                    ->openUrlInNewTab(),
                TextColumn::make('published_at')
                    ->date('F j, Y')
                    ->sortable(),            
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSocialMediaPostings::route('/'),
            'create' => Pages\CreateSocialMediaPosting::route('/create'),
            'edit' => Pages\EditSocialMediaPosting::route('/{record}/edit'),
        ];
    }
}
