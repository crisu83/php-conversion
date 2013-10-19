<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Length;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Length
 * @package Crisu83\Conversion\Quantity\Length
 */
class Length extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::METRE;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::MILLIMETRE    => 0.001,
        Unit::CENTIMETRE    => 0.01,
        Unit::METRE         => 1,
        Unit::KILOMETRE     => 1000,
        Unit::INCH          => 0.0254,
        Unit::FOOT          => 0.3048,
        Unit::YARD          => 0.9144,
        Unit::MILE          => 1609.34,
        Unit::NAUTICAL_MILE => 1852,
    );
}