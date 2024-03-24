<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Kamus;
use App\Models\Translate;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Kamus', Kamus::query()->count())
                ->description('Kata Kamus dari database')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Translate', Translate::query()->count())
                ->description('Data Terkumpul')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info'),
            Stat::make('Artikel dan Blog', Blog::query()->count())
                ->description('3% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                ->color('warning'),
        ];
    }
}
