<?php

namespace App\Filament\User\Resources\CollectedDataResource\Pages;

use App\Filament\User\Resources\CollectedDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCollectedData extends ListRecords
{
    protected static string $resource = CollectedDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
