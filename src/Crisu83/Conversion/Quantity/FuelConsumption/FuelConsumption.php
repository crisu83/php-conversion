<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\FuelConsumption;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class FuelConsumption
 * @package Crisu83\Conversion\Quantity\FuelConsumption
 */
class FuelConsumption extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::KILOMETRES_PER_LITRE;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::KILOMETRES_PER_LITRE      => 1,
        Unit::LITRE_PER_100_KILOMETRES  => 100,
        Unit::MILES_PER_GALLON          => 0.354006,
        Unit::US_MILES_PER_GALLON       => 0.425144,
    );
}