<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Payment;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Enums\PaymentStatus;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PaymentChampionResource\Pages;
use App\Filament\Resources\PaymentChampionResource\RelationManagers;

class PaymentChampionResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'User Management';

    public static function getNavigationBadge(): ?string
    {
        return cache()->remember('payment-count', now()->addMinutes(10), fn () => static::getModel()::count());

    }



    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-user')
            ->emptyStateDescription('No payment yet.')
            ->columns([
                TextColumn::make('champion_id')
                    ->label('Champion Email')
                    ->formatStateUsing(fn ($state) => $state->champion->email ?? '')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('trace_no')
                    ->label('Trace Number'),
                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn ($state) => PaymentStatus::from($state)->name)
                    ->badge()
                    ->color(function ($state) {
                        try {
                            $enum = PaymentStatus::from($state);
                        } catch (\ValueError $e) {
                            return 'gray';
                        }

                        return match ($enum) {
                            PaymentStatus::AWARENESS => 'warning',
                            PaymentStatus::EMPOWERMENT => 'secondary',
                            PaymentStatus::SUSTAINABILITY => 'primary',
                        };
                    })
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
            'index' => Pages\ListPaymentChampions::route('/'),
        ];
    }
}
