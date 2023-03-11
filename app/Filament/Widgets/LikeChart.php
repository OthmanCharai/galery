<?php

namespace App\Filament\Widgets;

use App\Models\Collection;
use App\Models\Like;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class LikeChart extends LineChartWidget
{
    protected static ?string $heading =  'Likes';

    protected static ?int $sort=1;

    protected function getData(): array
    {
        $data = Trend::model(Like::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )

            ->perMonth()
            ->count();

        return [
            //
            'datasets' => [
                [
                    'label' => "Likes",
                    'data' => $data->map(static fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(static fn (TrendValue $value) => $value->date),
        ];
    }

    protected  function getHeading(): ?string
    {
        return "Likes";
    }
}
