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

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Speed
 */
class Unit extends BaseUnit
{
    // Metric units
    const METRE_PER_SECOND      = 'm/s';
    const KILOMETRES_PER_HOUR   = 'km/h';
    // Imperial units
    const FEET_PER_SECOND       = 'ft/s';
    const MILES_PER_HOUR        = 'mph';
    // Other units
    const KNOT                  = 'kn';

} 