<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Acceleration;

use Crisu83\Conversion\Quantity\Quantity;

/**
 * Class Acceleration
 * @package Crisu83\Conversion\Quantity\Acceleration
 */
class Acceleration extends Quantity
{
    /**
     * @var string native unit name
     */
    protected static $native = Unit::METRE_PER_SECOND_SQUARED;

    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::METRE_PER_SECOND_SQUARED  => 1,
    );
}