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

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Volume
 */
class Unit extends BaseUnit
{
    // Metric system
    const MILLILITRE        = 'mL';
    const LITRE             = 'L';
    const CUBIC_MILLIMETRE  = 'mm^3';
    const CUBIC_CENTIMETRE  = 'cm^3';
    const CUBIC_METRE       = 'm^3';

    // Imperial system
    const GALLON            = 'gal';
    const QUART             = 'qt';
    const PINT              = 'pt';
    const CUP               = 'c';
    const OUNCE             = 'oz';
    const TABLESPOON        = 'tbsp';
    const TEASPOON          = 'tsp';
    // US system
    const US_GALLON         = 'us gal';
    const US_QUART          = 'us qt';
    const US_PINT           = 'us pt';
    const US_CUP            = 'us c';
    const US_OUNCE          = 'us oz';
    const US_TABLESPOON     = 'us tbsp';
    const US_TEASPOON       = 'us tsp';
    // Other units
    const CUBIC_INCH        = 'in^3';
    const CUBIC_FOOT        = 'ft^3';
} 