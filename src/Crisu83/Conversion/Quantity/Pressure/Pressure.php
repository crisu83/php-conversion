<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Pressure;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Pressure
 * @package Crisu83\Conversion\Quantity\Pressure
 */
class Pressure extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::PASCAL;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::PASCAL                    => 1,
        Unit::KILOPASCAL                => 1000,
        Unit::MEGAPASCAL                => 1e6,
        Unit::BAR                       => 1e5,
        Unit::MILLIMETRES_OF_MERCURY    => 133.3224,
        Unit::INCHES_OF_MERCURY         => 3.386389e3,
        Unit::POUNDS_PER_SQUARE_INCH    => 6.894757e3,
        Unit::ATMOSPHERE                => 101325,
    );
}