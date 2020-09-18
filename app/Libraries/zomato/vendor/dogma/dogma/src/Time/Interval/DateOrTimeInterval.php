<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Time\Interval;

use Dogma\Math\Interval\Interval;
use Dogma\Time\Span\DateTimeSpan;

interface DateOrTimeInterval /*<T>*/ extends Interval /*<T>*/
{

    public function getSpan(): DateTimeSpan;

    //public function splitByUnit(DateTimeUnit $unit): DateOrTimeIntervalSet<T>

}
