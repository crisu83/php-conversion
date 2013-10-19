<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Temperature;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Temperature
 * @package Crisu83\Conversion\Quantity\Temperature
 */
class Temperature extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::KELVIN;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::CELSIUS       => 273.15,
        Unit::FAHRENHEIT    => 255.372,
        Unit::KELVIN        => 1,
    );
}