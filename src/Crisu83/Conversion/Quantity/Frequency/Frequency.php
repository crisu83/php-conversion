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

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Frequency
 * @package Crisu83\Conversion\Quantity\Frequency
 */
class Frequency extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::HERTZ;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::HERTZ         => 1,
        Unit::KILOHERTZ     => 1000,
        Unit::MEGAHERTZ     => 1000000,
        Unit::GIGAHERTZ     => 1000000000,
        Unit::RPS           => 1,
        Unit::RPM           => 0.016666667,
        Unit::RPH           => 0.000277778,
    );
}