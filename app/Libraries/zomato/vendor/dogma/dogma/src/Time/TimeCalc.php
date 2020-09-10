<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Time;

use Dogma\Math\ModuloCalc;
use Dogma\NotImplementedException;
use Dogma\Overflow;
use function call_user_func;
use function get_class;

class TimeCalc
{

    /**
     * Round to closest value from given list of values for given unit
     * (eg. 15:36:15 * minutes[0, 10, 20, 30, 40 50] --> 15:40:00)
     * @param \Dogma\Time\DateTimeOrTime $value
     * @param \Dogma\Time\DateTimeUnit $unit
     * @param int[]|null $allowedValues
     * @return \Dogma\Time\DateTimeOrTime
     */
    public static function roundTo(DateTimeOrTime $value, DateTimeUnit $unit, ?array $allowedValues = null): DateTimeOrTime
    {
        return self::roundAny('roundTo', $value, $unit, $allowedValues);
    }

    /**
     * Round to first upper value from given list of values for given unit
     * (eg. 15:32:15 * minutes[0, 10, 20, 30, 40 50] --> 15:40:00)
     * @param \Dogma\Time\DateTimeOrTime $value
     * @param \Dogma\Time\DateTimeUnit $unit
     * @param int[]|null $allowedValues
     * @return \Dogma\Time\DateTimeOrTime
     */
    public static function roundUpTo(DateTimeOrTime $value, DateTimeUnit $unit, ?array $allowedValues = null): DateTimeOrTime
    {
        return self::roundAny('roundUpTo', $value, $unit, $allowedValues);
    }

    /**
     * Round to first lower value from given list of values for given unit
     * (eg. 15:36:15 * minutes[0, 10, 20, 30, 40 50] --> 15:30:00)
     * @param \Dogma\Time\DateTimeOrTime $value
     * @param \Dogma\Time\DateTimeUnit $unit
     * @param int[]|null $allowedValues
     * @return \Dogma\Time\DateTimeOrTime
     */
    public static function roundDownTo(DateTimeOrTime $value, DateTimeUnit $unit, ?array $allowedValues = null): DateTimeOrTime
    {
        return self::roundAny('roundDownTo', $value, $unit, $allowedValues);
    }

    /**
     * @param string $method
     * @param \Dogma\Time\DateTimeOrTime $value
     * @param \Dogma\Time\DateTimeUnit $unit
     * @param int[]|null $allowedValues
     * @return \Dogma\Time\DateTimeOrTime
     */
    private static function roundAny(string $method, DateTimeOrTime $value, DateTimeUnit $unit, ?array $allowedValues = null): DateTimeOrTime
    {
        $class = get_class($value);

        if ($allowedValues === null) {
            $allowedValues = [0];
        }

        $dayOverflow = false;
        switch ($unit->getValue()) {
            case DateTimeUnit::HOUR:
                [$hours, $overflow] = call_user_func([ModuloCalc::class, $method], $value->getHours() + $value->getMinutes() / 60 + $value->getSeconds() / 3600 + $value->getMicroseconds() / 3600 / 1000000, $allowedValues, 24);
                if ($overflow !== Overflow::NONE) {
                    $dayOverflow = $overflow;
                }
                $minutes = 0;
                $seconds = 0;
                $microseconds = 0;
                break;
            case DateTimeUnit::MINUTE:
                [$minutes, $overflow] = call_user_func([ModuloCalc::class, $method], $value->getMinutes() + $value->getSeconds() / 3600 + $value->getMicroseconds() / 3600 / 1000000, $allowedValues, 60);
                $hours = $value->getHours();
                if ($overflow === Overflow::OVERFLOW) {
                    $hours++;
                    if ($hours === 24) {
                        $hours = 0;
                        $dayOverflow = Overflow::OVERFLOW;
                    }
                } elseif ($overflow === Overflow::UNDERFLOW) {
                    $hours--;
                    if ($hours === -1) {
                        $hours = 23;
                        $dayOverflow = Overflow::UNDERFLOW;
                    }
                }
                $seconds = 0;
                $microseconds = 0;
                break;
            case DateTimeUnit::SECOND:
                [$seconds, $overflow] = call_user_func([ModuloCalc::class, $method], $value->getSeconds() + $value->getMicroseconds() / 3600 / 1000000, $allowedValues, 60);
                $hours = $value->getHours();
                $minutes = $value->getMinutes();
                if ($overflow === Overflow::OVERFLOW) {
                    $minutes++;
                    if ($minutes === 60) {
                        $minutes = 0;
                        $hours++;
                        if ($hours === 24) {
                            $hours = 0;
                            $dayOverflow = Overflow::OVERFLOW;
                        }
                    }
                } elseif ($overflow === Overflow::UNDERFLOW) {
                    $minutes--;
                    if ($minutes === -1) {
                        $minutes = 59;
                        $hours--;
                        if ($hours === -1) {
                            $hours = 23;
                            $dayOverflow = Overflow::UNDERFLOW;
                        }
                    }
                }
                $microseconds = 0;
                break;
            case DateTimeUnit::MILISECOND:
                [$miliseconds, $overflow] = call_user_func([ModuloCalc::class, $method], $value->getMicroseconds() / 1000, $allowedValues, 1000);
                $hours = $value->getHours();
                $minutes = $value->getMinutes();
                $seconds = $value->getSeconds();
                if ($overflow === Overflow::OVERFLOW) {
                    $seconds++;
                    if ($seconds === 60) {
                        $seconds = 0;
                        $minutes++;
                        if ($minutes === 60) {
                            $minutes = 0;
                            $hours++;
                            if ($hours === 24) {
                                $hours = 0;
                                $dayOverflow = Overflow::OVERFLOW;
                            }
                        }
                    }
                } elseif ($overflow === Overflow::UNDERFLOW) {
                    $seconds--;
                    if ($seconds === -1) {
                        $seconds = 59;
                        $minutes--;
                        if ($minutes === -1) {
                            $minutes = 59;
                            $hours++;
                            if ($hours === -1) {
                                $hours = 23;
                                $dayOverflow = Overflow::UNDERFLOW;
                            }
                        }
                    }
                }
                $microseconds = $miliseconds * 1000;
                break;
            case DateTimeUnit::MICROSECOND:
                [$microseconds, $overflow] = call_user_func([ModuloCalc::class, $method], $value->getMicroseconds(), $allowedValues, 1000000);
                $hours = $value->getHours();
                $minutes = $value->getMinutes();
                $seconds = $value->getSeconds();
                if ($overflow === Overflow::OVERFLOW) {
                    $seconds++;
                    if ($seconds === 60) {
                        $seconds = 0;
                        $minutes++;
                        if ($minutes === 60) {
                            $minutes = 0;
                            $hours++;
                            if ($hours === 24) {
                                $hours = 0;
                                $dayOverflow = Overflow::OVERFLOW;
                            }
                        }
                    }
                } elseif ($overflow === Overflow::UNDERFLOW) {
                    $seconds--;
                    if ($seconds === -1) {
                        $seconds = 59;
                        $minutes--;
                        if ($minutes === -1) {
                            $minutes = 59;
                            $hours++;
                            if ($hours === -1) {
                                $hours = 23;
                                $dayOverflow = Overflow::UNDERFLOW;
                            }
                        }
                    }
                }
                break;
            default:
                throw new NotImplementedException('Only hours, minutes, seconds, ms and µs can be rounded.');
        }

        if (!$value instanceof DateTime) {
            return call_user_func([$class, 'createFromComponents'], $hours, $minutes, $seconds, $microseconds);
        }

        $time = Time::createFromComponents($hours, $minutes, $seconds, $microseconds);
        $date = $value->getDate();
        if ($dayOverflow === Overflow::OVERFLOW) {
            $date = $date->addDay();
        } elseif ($dayOverflow === Overflow::UNDERFLOW) {
            $date = $date->subtractDay();
        }

        return call_user_func([$class, 'createFromDateAndTime'], $date, $time, $value->getTimezone());
    }

}
