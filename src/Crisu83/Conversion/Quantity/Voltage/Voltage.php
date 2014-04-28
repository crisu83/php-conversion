<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Voltage;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Voltage
 * @package Crisu83\Conversion\Quantity\Voltage
 */
class Voltage extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::VOLT;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::VOLT          => 1,
        Unit::KILOVOLT      => 1000,
    );
}