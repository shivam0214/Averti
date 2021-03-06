<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Time;

use function sprintf;

class InvalidDayOfYearIntervalException extends TimeException
{

    public function __construct(DayOfYear $start, DayOfYear $end, ?\Throwable $previous = null)
    {
        parent::__construct(sprintf(
            'Difference between two dates in a season must be less than or exactly 366 days. Values %s (start) and %s (end) given.',
            $start->format(),
            $end->format()
        ), $previous);
    }

}
