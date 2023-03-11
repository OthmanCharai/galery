<?php

namespace App\Filament\Widgets;

use App\Models\Collection;
use App\Models\Image;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            //
            Card::make('Images Number', (auth()->user()->hasRole('super_admin'))?Image::count():count(Image::where('user_id',auth()->user()->id)->get())),
            Card::make('Collection Number', (auth()->user()->hasRole('super_admin'))?Collection::count():count(Collection::where('user_id',auth()->user()->id)->get())),

        ];
    }
}
