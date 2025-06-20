<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Champion;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\PaymentStatus;
use App\Enums\ChampionStatus;
use Filament\Resources\Resource;
use App\Enums\ChampionMembership;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ChampionResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ChampionResource\RelationManagers;

class ChampionResource extends Resource
{
    protected static ?string $model = Champion::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'User Management';

    public static function getNavigationBadge(): ?string
    {
        // return static::getModel()::count();
        return cache()->remember('champion-count', now()->addMinutes(10), fn () => static::getModel()::count());

    }


    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-user')
            ->emptyStateDescription('No champion yet.')
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
                    ->formatStateUsing(fn ($state) => ChampionMembership::from($state)->name)
                    ->badge()
                    ->color(function ($state) {
                        try {
                            $enum = ChampionMembership::from($state);
                        } catch (\ValueError $e) {
                            return 'gray';
                        }

                        return match ($enum) {
                            ChampionMembership::AWARENESS => 'warning',
                            ChampionMembership::EMPOWERMENT => 'secondary',
                            ChampionMembership::SUSTAINABILITY => 'primary',
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
                Filter::make('Paid Payment Champions')
                    ->query(fn (Builder $query) => $query->whereHas('payments', fn ($q) => $q->where('status', PaymentStatus::COMPLETED->value))),
                Filter::make('Pending Payment Champions')
                    ->query(fn (Builder $query) => $query->whereHas('payments', fn ($q) => $q->where('status', PaymentStatus::PENDING->value))),
                Filter::make('Failed Payment Champions')
                    ->query(fn (Builder $query) => $query->whereHas('payments', fn ($q) => $q->where('status', PaymentStatus::FAILED->value))),
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
            'index' => Pages\ListChampions::route('/'),
        ];
    }

}
