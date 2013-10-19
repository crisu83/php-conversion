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

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\FuelConsumption
 */
class Unit extends BaseUnit
{
    // Metric units
    const KILOMETRES_PER_LITRE      = 'km/L';
    const LITRE_PER_100_KILOMETRES  = 'L/100 km';
    // Imperial units
    const MILES_PER_GALLON          = 'mpg';
    // US units
    const US_MILES_PER_GALLON       = 'us mpg';

}