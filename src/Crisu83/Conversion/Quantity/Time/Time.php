<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Time;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Time
 * @package Crisu83\Conversion\Quantity\Time
 */
class Time extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::SECOND;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::NANOSECOND    => 1e-9,
        Unit::MICROSECOND   => 1e-6,
        Unit::MILLISECOND   => 0.001,
        Unit::SECOND        => 1,
        Unit::MINUTE        => 60,
        Unit::HOUR          => 3600,
        Unit::DAY           => 86400,
        Unit::WEEK          => 604800,
        Unit::MONTH         => 2.62974e6,
        Unit::YEAR          => 3.15569e7,
        Unit::DECADE        => 3.15569e8,
        Unit::CENTURY       => 3.15569e9,
        Unit::MILLENIUM     => 3.1556926e10
    );
}