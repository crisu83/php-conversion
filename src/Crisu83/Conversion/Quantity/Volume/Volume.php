<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Volume;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Volume
 *
 * @package Crisu83\Conversion\Quantity\Volume
 */
class Volume extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::CUBIC_METRE;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::MILLILITRE       => 1e-6,
        Unit::CUBIC_MILLIMETRE => 1e-9,
        Unit::CUBIC_CENTIMETRE => 1e-6,
        Unit::LITRE            => 0.001,
        Unit::CUBIC_METRE      => 1,
        Unit::GALLON           => 0.00454609,
        Unit::QUART            => 0.00113652,
        Unit::PINT             => 0.000568261,
        Unit::OUNCE            => 2.8413e-5,
        Unit::TABLESPOON       => 1.7758e-5,
        Unit::TEASPOON         => 5.9194e-6,
        Unit::US_GALLON        => 0.00378541,
        Unit::US_QUART         => 0.000946353,
        Unit::US_PINT          => 0.000473176,
        Unit::US_CUP           => 0.000236588,
        Unit::US_OUNCE         => 2.9574e-5,
        Unit::US_TABLESPOON    => 1.4787e-5,
        Unit::US_TEASPOON      => 4.9289e-6,
        Unit::CUBIC_INCH       => 1.6387e-5,
        Unit::CUBIC_FOOT       => 0.0283168,
    );
}