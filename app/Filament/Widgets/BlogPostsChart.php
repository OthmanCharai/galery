<?php

namespace App\Filament\Widgets;

use App\Models\Collection;
use App\Models\Image;
use App\Models\User;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BlogPostsChart extends LineChartWidget
{
    protected static ?string $heading =  'Collections';

    protected static ?int $sort=2;

    protected function getData(): array
    {
        $data = Trend::model(Collection::class)
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
                    'label' => "Collections",
                    'data' => $data->map(static fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(static fn (TrendValue $value) => $value->date),
        ];
    }

    protected  function getHeading(): ?string
    {
        return "Collections";
    }
}
