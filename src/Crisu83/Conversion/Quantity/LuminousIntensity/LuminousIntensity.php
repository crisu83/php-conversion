<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\LuminousIntensity;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class LuminousIntensity
 * @package Crisu83\Conversion\Quantity\LuminousIntensity
 */
class LuminousIntensity extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::CANDELA;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::CANDELA  => 1,
    );
}