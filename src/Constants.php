<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

class Constants
{
    public const PERIOD_WEEK = '7day';
    public const PERIOD_MONTH = '1month';
    public const PERIOD_3_MONTHS = '3month';
    public const PERIOD_6_MONTHS = '6month';
    public const PERIOD_YEAR = '12month';
    public const PERIOD_OVERALL = 'overall';

    public const PERIODS = [
        self::PERIOD_WEEK,
        self::PERIOD_MONTH,
        self::PERIOD_3_MONTHS,
        self::PERIOD_6_MONTHS,
        self::PERIOD_YEAR,
        self::PERIOD_OVERALL,
    ];
}
