<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Mass;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Mass
 * @package Crisu83\Conversion\Quantity\Mass
 */
class Mass extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::KILOGRAM;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::MICROGRAM     => 1e-7,
        Unit::MILLIGRAM     => 1e-6,
        Unit::GRAM          => 0.001,
        Unit::KILOGRAM      => 1,
        Unit::METRIC_TON    => 100,
        Unit::OUNCE         => 0.0283495,
        Unit::POUND         => 0.453592,
        Unit::STONE         => 6.35029,
        Unit::SHORT_TON     => 907.185,
        Unit::LONG_TON      => 1016.0469088,
    );
}