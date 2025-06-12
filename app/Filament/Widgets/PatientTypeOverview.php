<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(__('Cats'), Patient::query()
                ->where('type', 'cat')
                ->count()),
            Stat::make(__('Dogs'), Patient::query()
                ->where('type', 'dog')
                ->count()),
            Stat::make(__('Rabbits'), Patient::query()
                ->where('type', 'rabbit')
                ->count()),
        ];
    }
}
