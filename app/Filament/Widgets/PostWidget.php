<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Published Post', Post::where('status', 'published')->count()),
            Stat::make('Draft Post', Post::where('status', 'draft')->count()),
            Stat::make('Total Category', Category::count()),
        ];
    }
}
