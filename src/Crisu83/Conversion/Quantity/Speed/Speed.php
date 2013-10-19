<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Speed;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Speed
 * @package Crisu83\Conversion\Quantity\Speed
 */
class Speed extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::METRE_PER_SECOND;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::METRE_PER_SECOND      => 1,
        Unit::KILOMETRES_PER_HOUR   => 0.277778,
        Unit::FEET_PER_SECOND       => 0.3048,
        Unit::MILES_PER_HOUR        => 0.44704,
        Unit::KNOT                  => 0.514444,
    );
}