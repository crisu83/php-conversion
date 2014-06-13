<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Power;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Power
 * @package Crisu83\Conversion\Quantity\Power
 */
class Power extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::WATT;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::WATT   => 1,
        Unit::KILOWATT   => 1000,
        Unit::MEGAWATT   => 1000000,
    );
}