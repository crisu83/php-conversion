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

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Time
 */
class Unit extends BaseUnit
{
    const NANOSECOND    = 'ns';
    const MICROSECOND   = 'us';
    const MILLISECOND   = 'ms';
    const SECOND        = 's';
    const MINUTE        = 'min';
    const HOUR          = 'hr';
    const DAY           = 'd';
    const WEEK          = 'wk';
    const MONTH         = 'mo';
    const YEAR          = 'a';
    const DECADE        = 'decade';
    const CENTURY       = 'century';
    const MILLENIUM     = 'ka';
}