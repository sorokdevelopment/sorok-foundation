<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Jobs\SendBulkEmailJob;
use Filament\Resources\Resource;
use App\Models\SocialMediaPosting;
use App\Mail\SocialMediaPostingMail;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\SocialMediaPostingResource\Pages;

class SocialMediaPostingResource extends Resource
{
    protected static ?string $model = SocialMediaPosting::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    protected static ?string $navigationGroup = 'Posting';


    public static function getNavigationBadge(): ?string
    {
        return cache()->remember('posting-count', now()->addMinutes(10), fn () => static::getModel()::count());
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
                    ->placeholder('Write a post description')
                    ->label('Description'),

                DatePicker::make('published_at')
                    ->label('Published Date')
                    ->required() 
                    ->rules(['date']),

                FileUpload::make('image')
                    ->directory('social-media-images')
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
            ->emptyStateIcon('heroicon-o-document-text')
            ->emptyStateDescription('Once you write your first post, it will appear here.')
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
                    // Tables\Actions\Action::make('sendToChampions')
                    //     ->icon('heroicon-o-envelope')
                    //     ->label('Send to Champions')
                    //     ->color('success')
                    //     ->modalDescription('Emails will process in background')
                    //     ->requiresConfirmation()
                    //     ->modalHeading('Send to Champions')
                    //     ->action(function (Model $record): void {
                    //         dispatch(new SendBulkEmailJob(
                    //             SocialMediaPosting::class,
                    //             SocialMediaPostingMail::class,
                    //             $record->id,
                    //             [
                    //                 $record->title,
                    //                 $record->description,
                    //                 $record->link,
                    //                 $record->image,
                    //             ]
                    //         ));

                    //         Notification::make()
                    //             ->title('Emails are being sent')
                    //             ->body('The process has started and will continue in the background.')
                    //             ->success()
                    //             ->send();
                    //     })
                    //     ->deselectRecordsAfterCompletion(),
                ])

                ->tooltip('Actions')
                ->color('info')
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ])
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
