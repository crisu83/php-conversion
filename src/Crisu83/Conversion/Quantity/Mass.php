<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity;

/**
 * Class Mass
 * @package Crisu83\Conversion\Quantity
 */
class Mass extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::GRAM;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::MICROGRAM     => 0.0001,
        Unit::MILLIGRAM     => 0.001,
        Unit::GRAM          => 1,
        Unit::KILOGRAM      => 1000,
        Unit::METRIC_TON    => 100000,
        Unit::OUNCE         => 28.3495,
        Unit::POUND         => 453.592,
        Unit::STONE         => 6350.29,
        Unit::SHORT_TON     => 907185,
        Unit::LONG_TON      => 1016046.9088,
    );
}