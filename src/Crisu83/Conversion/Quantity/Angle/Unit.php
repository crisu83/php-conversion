<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Angle;

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Angle
 */
class Unit extends BaseUnit
{
    const TURN      = 'turn';
    const RADIAN    = 'rad';
    const DEGREE    = 'deg';
    const GRADIAN   = 'grad';
}