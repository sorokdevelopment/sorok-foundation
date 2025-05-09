<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Newsletter;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsletterResource\Pages;
use App\Filament\Resources\NewsletterResource\RelationManagers;

class NewsletterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Newsletter';



    public static function getNavigationBadge(): ?string
    {
        return cache()->remember('newsletter-count', now()->addMinutes(10), fn () => static::getModel()::count());

    }


    protected static ?string $navigationGroup = 'Posting';





    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->required()
                ->maxLength(255)
                ->placeholder('Enter title...'),

            TextInput::make('slug')
                ->disabled()
                ->dehydrated(),

            Textarea::make('description')
                ->required()
                ->rows(5)
                ->placeholder('Write a description...'),

            DatePicker::make('published_at')
                ->label('Published Date')
                ->required() 
                ->rules(['date']),

            FileUpload::make('thumbnail')
                ->directory('newsletters')
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
            RichEditor::make('content')
                ->label('Newsletter Content')
                ->required()
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ])
                ->disableToolbarButtons([
                    'blockquote',
                    'strike',
                ])
                ->fileAttachmentsDirectory('newsletters')
                ->fileAttachmentsVisibility('public')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-newspaper')
            ->emptyStateDescription('Once you write your first newsletter, it will appear here.')
            ->columns([
                ImageColumn::make('thumbnail')
                    ->size(50),
                TextColumn::make('title')
                    ->searchable()
                    ->limit(30)
                    ->tooltip(fn ($record) => $record->title)
                    ->sortable(),
                TextColumn::make('description')
                    ->limit(30)
                    ->tooltip(fn ($record) => $record->description),

              
                TextColumn::make('published_at')
                    ->label('Published Date')
                    ->date('F j, Y')
                    ->sortable(), 
                    
                TextColumn::make('content')
                    ->label('Preview')
                    ->limit(200) 
                    ->html(),
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
            'index' => Pages\ListNewsletters::route('/'),
            'create' => Pages\CreateNewsletter::route('/create'),
            'edit' => Pages\EditNewsletter::route('/{record}/edit'),
        ];
    }
}
