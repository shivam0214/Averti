<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md'; distributed with this source code
 */

namespace Dogma\Language\Locale;

use Dogma\Enum\StringEnum;
use Dogma\Language\Collator;
use function strtolower;

class LocaleColBackwards extends StringEnum implements LocaleCollationOption
{

    public const YES = 'yes';
    public const NO = 'no';

    public static function validateValue(string &$value): bool
    {
        $value = strtolower($value);

        return parent::validateValue($value);
    }

    public function getCollatorValue(): int
    {
        return [
            self::YES => Collator::ON,
            self::NO => Collator::OFF,
        ][$this->getValue()];
    }

}
