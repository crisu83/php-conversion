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

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Angle
 * @package Crisu83\Conversion\Quantity\Angle
 */
class Angle extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::RADIAN;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::TURN      => 6.28318531,
        Unit::RADIAN    => 1,
        Unit::DEGREE    => 0.0174532925,
        Unit::GRADIAN   => 0.015707963267949,
    );
}