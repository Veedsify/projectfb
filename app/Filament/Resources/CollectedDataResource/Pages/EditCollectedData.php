<?php

namespace App\Filament\Resources\CollectedDataResource\Pages;

use App\Filament\Resources\CollectedDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollectedData extends EditRecord
{
    protected static string $resource = CollectedDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
