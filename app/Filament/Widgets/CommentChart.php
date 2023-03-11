<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use App\Models\User;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class CommentChart extends LineChartWidget
{
    protected static ?string $heading =  'Comments';

    protected static ?int $sort=4;

    protected function getData(): array
    {
        $data = Trend::model(Comment::class)
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
                    'label' => "Comments",
                    'data' => $data->map(static fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(static fn (TrendValue $value) => $value->date),
        ];
    }

    protected  function getHeading(): ?string
    {
        return "Comments";
    }
}
