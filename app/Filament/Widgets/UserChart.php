<?php

namespace App\Filament\Widgets;

use App\Models\Like;
use App\Models\User;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class UserChart extends LineChartWidget
{
    protected static ?string $heading =  'Users';

    protected static ?int $sort=3;

    protected function getData(): array
    {
        $data = Trend::model(User::class)
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
                    'label' => "Users",
                    'data' => $data->map(static fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(static fn (TrendValue $value) => $value->date),
        ];
    }

    protected  function getHeading(): ?string
    {
        return "Users";
    }
}
