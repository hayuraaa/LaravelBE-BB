<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Kamus;
use App\Models\Pembelajaran;
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
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('success'),
            Stat::make('Translate', Translate::query()->count())
                ->description('Data Terkumpul')
                ->descriptionIcon('heroicon-m-language')
                ->color('info'),
            Stat::make('Pembelajaran', Pembelajaran::query()->count())
                ->description('Modul')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('gray'),
            Stat::make('Artikel dan Blog', Blog::query()->count())
                ->description('Postingan')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('warning'),
            
            
        ];
    }
}
