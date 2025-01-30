<?php

namespace App\Filament\Resources\CollectedDataResource\Pages;

use App\Filament\Resources\CollectedDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCollectedData extends ListRecords
{
    protected static string $resource = CollectedDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Add Data'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CollectedDataResource\Widgets\ColledtedDataWidget::class
        ];
    }
}
