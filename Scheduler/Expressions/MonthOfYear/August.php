<?php

declare(strict_types=1);

namespace Codefy\Foundation\Scheduler\Expressions\MonthOfYear;

use Codefy\Foundation\Scheduler\Expressions\Expressional;
use Codefy\Foundation\Scheduler\Expressions\Monthly;
use Cron\CronExpression;

final class August implements Expressional
{
    /**
     * Sets the job execution time to run once every August.
     */
    public static function make(
        int|string|array $day = 1,
        int|string|array $hour = 0,
        int|string|array $minute = 0
    ): CronExpression {
        return Monthly::make(8, $day, $hour, $minute);
    }
}
