<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\ApparentPower;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class ApparentPower
 * @package Crisu83\Conversion\Quantity\ApparentPower
 */
class ApparentPower extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::VOLT_AMPERE;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::VOLT_AMPERE      => 1,
        Unit::KILOVOLT_AMPERE  => 1000,
    );
}
