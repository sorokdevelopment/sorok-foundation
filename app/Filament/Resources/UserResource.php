<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Admin Management';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('User Details')->schema([
                    TextInput::make('name')->required()->maxLength(255),

                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->unique(User::class, 'email', ignoreRecord: true),
                ]),
                Section::make('Password Information')->schema([
                    TextInput::make('old_password')
                        ->password()
                        ->label('Old Password')
                        ->required(fn ($record) => $record !== null) 
                        ->rule(fn ($record) => $record ? function ($attribute, $value, $fail) {
                            if (!Hash::check($value, auth()->user()->password)) {
                                $fail('The old password is incorrect.');
                            }
                        } : null) 
                        ->revealable()
                        ->hidden(fn ($record) => $record === null), 
        
                    TextInput::make('password')
                        ->password()
                        ->label('New Password')
                        ->required(fn ($record) => $record === null) 
                        ->minLength(8)
                        ->revealable()
                        ->dehydrateStateUsing(fn ($state) => filled($state) ? Hash::make($state) : null)
                        ->dehydrated(fn ($state) => filled($state)),
        
                    TextInput::make('password_confirmation')
                        ->password()
                        ->label('Confirm New Password')
                        ->same('password') 
                        ->revealable()
                        ->required(fn ($record) => $record === null) 
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->emptyStateIcon('heroicon-o-user')
            ->emptyStateDescription('Once you write your first user, it will appear here.')
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->date('F j, Y'),

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
