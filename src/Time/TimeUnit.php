<?php

declare(strict_types=1);

namespace loophp\nanobench\Time;

interface TimeUnit
{
    public const DAY = 'day';

    public const HOUR = 'hour';

    public const MICROSECOND = 'microsecond';

    public const MILLISECOND = 'millisecond';

    public const MINUTE = 'minute';

    public const MONTH = 'month';

    public const NANOSECOND = 'nanosecond';

    public const SECOND = 'second';

    public const WEEK = 'week';

    public const YEAR = 'year';
}
