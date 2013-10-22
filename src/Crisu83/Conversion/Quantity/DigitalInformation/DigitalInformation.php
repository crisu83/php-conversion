<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\DigitalInformation;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class DigitalInformation
 * @package Crisu83\Conversion\Quantity\DigitalInformation
 */
class DigitalInformation extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::KILOBYTE;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::BIT       => 0.00012207,
        Unit::BYTE      => 0.000976563,
        Unit::KILOBIT   => 0.125,
        Unit::KILOBYTE  => 1,
        Unit::MEGABIT   => 128,
        Unit::MEGABYTE  => 1024,
        Unit::GIGABIT   => 131072,
        Unit::GIGABYTE  => 1.049e+6,
        Unit::TERABIT   => 1.342e+8,
        Unit::TERABYTE  => 1.074e+9,
        Unit::PETABIT   => 1.374e+11,
        Unit::PETABYTE  => 1.1e+12,
    );
}