<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\ChampionStatus;
use App\Models\ScholarSponsor;
use Filament\Resources\Resource;
use App\Enums\ScholarSponsorMembership;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ScholarSponsorResource\Pages;
use App\Filament\Resources\ScholarSponsorResource\RelationManagers;

class ScholarSponsorResource extends Resource
{
    protected static ?string $model = ScholarSponsor::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    
    protected static ?string $navigationGroup = 'User Management';

    public static function getNavigationBadge(): ?string
    {
        // return static::getModel()::count();
        return cache()->remember('scholar-sponsor-count', now()->addMinutes(10), fn () => static::getModel()::count());

    }


    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-academic-cap')
            ->emptyStateDescription('No sponsor yet.')
            ->columns([
                TextColumn::make('status')
                    ->formatStateUsing(fn ($state) => ChampionStatus::from($state)->name)
                    ->badge()
                    ->color(function ($state) {
                        try {
                            $enum = ChampionStatus::from($state);
                        } catch (\ValueError $e) {
                            return 'gray';
                        }

                        return match ($enum) {
                            ChampionStatus::ACTIVE => 'primary',
                            ChampionStatus::INACTIVE => 'danger',
                        };
                    })
                    ->sortable(),
                TextColumn::make('full_name'),
                TextColumn::make('email')
                    ->sortable()
                    ->url(fn ($record) => 'mailto:'.$record->email)
                    ->color('primary')
                    ->searchable(),
                TextColumn::make('contact_number')
                    ->label('Contact Number'),
                TextColumn::make('membership')
                    ->label('Membership')
                    ->formatStateUsing(fn ($state) => ScholarSponsorMembership::from($state)->name)
                    ->badge()
                    ->color(function ($state) {
                        try {
                            $enum = ScholarSponsorMembership::from($state);
                        } catch (\ValueError $e) {
                            return 'gray';
                        }

                        return match ($enum) {
                            ScholarSponsorMembership::FAITH => 'secondary',
                            ScholarSponsorMembership::DREAM => 'primary',
                        };
                    })
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->date('F j, Y'),
                
            ])
            ->actions([

            ])
            ->filters([

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
            'index' => Pages\ListScholarSponsors::route('/'),
        ];
    }


}
