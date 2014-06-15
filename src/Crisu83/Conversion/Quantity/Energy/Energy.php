<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Energy;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Energy
 * @package Crisu83\Conversion\Quantity\Energy
 */
class Energy extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::JOULE;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = [
        Unit::JOULE     => 1,
        Unit::CALORIE   => 4.184,
        Unit::KILOWATT_HOUR  => 3.6e+6,
    ];
}
