<?php

declare(strict_types=1);

namespace Barryvanveen\Lastfm;

class Constants
{
    const PERIOD_WEEK = '7day';
    const PERIOD_MONTH = '1month';
    const PERIOD_3_MONTHS = '3month';
    const PERIOD_6_MONTHS = '6month';
    const PERIOD_YEAR = '12month';
    const PERIOD_OVERALL = 'overall';

    const PERIODS = [
        self::PERIOD_WEEK,
        self::PERIOD_MONTH,
        self::PERIOD_3_MONTHS,
        self::PERIOD_6_MONTHS,
        self::PERIOD_YEAR,
        self::PERIOD_OVERALL,
    ];
}
