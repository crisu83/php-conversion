<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Frequency;

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Frequency
 */
class Unit extends BaseUnit
{
    const HERTZ     = 'Hz';
    const KILOHERTZ = 'KHz';
    const MEGAHERTZ = 'MHz';
    const GIGAHERTZ = 'GHz';

    const RPS = 'RPS'; // Revolutions per second
    const RPM = 'RPM'; // Revolutions per minute
    const RPH = 'RPH'; // Revolutions per hour
} 