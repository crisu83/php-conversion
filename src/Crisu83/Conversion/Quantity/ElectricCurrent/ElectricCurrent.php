<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\ElectricCurrent;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class ElectricCurrent
 * @package Crisu83\Conversion\Quantity\ElectricCurrent
 */
class ElectricCurrent extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::AMPERE;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::STATAMPERE    => 3.33564e-10,
        Unit::MICROAMPERE   => 1e-06,
        Unit::MILLIAMPERE   => 0.001,
        Unit::AMPERE        => 1,
        Unit::ABAMPERE      => 10,
        Unit::KILOAMPERE    => 1000,
    );
}