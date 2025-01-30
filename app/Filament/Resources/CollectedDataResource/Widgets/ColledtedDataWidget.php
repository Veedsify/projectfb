<?php

namespace App\Filament\Resources\CollectedDataResource\Widgets;

use App\Models\CollectedData;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ColledtedDataWidget extends BaseWidget
{

    protected static bool $isLazy = false;

    protected function getStats(): array
    {
        return [
            Stat::make('Collected Infos', CollectedData::count())
                ->icon('heroicon-o-table-cells')
                ->color('success')
            ->description('All Collected Infos')
        ];
    }
}
