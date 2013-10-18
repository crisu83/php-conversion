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
 * Class Unit
 * @package Crisu83\Conversion\Quantity
 */
class Unit
{
    // Length units

    // Metric system
    const MILLIMETRE        = 'mm';
    const CENTIMETRE        = 'cm';
    const METRE             = 'm';
    const KILOMETRE         = 'km';
    // Imperial system
    const INCH              = 'in';
    const FEET              = 'ft';
    const YARD              = 'yd';
    const MILE              = 'mi';
    // Other systems
    const NAUTICAL_MILE     = 'nmi';

    // Area units

    // Metric system
    const SQUARE_METRE      = 'm^2';
    const HECTARE           = 'ha';
    const SQUARE_KILOMETRE  = 'km^2';
    // Imperial system
    const SQUARE_INCH       = 'in^2';
    const SQUARE_FEET       = 'ft^2';
    const SQUARE_YARD       = 'yd^2';
    const ACRE              = 'ac';
    const SQUARE_MILE       = 'mi^2';

    // Mass units

    // Metric system
    const MICROGRAM         = 'mcg';
    const MILLIGRAM         = 'mg';
    const GRAM              = 'g';
    const KILOGRAM          = 'kg';
    const METRIC_TON        = 't';
    // Imperial system
    const OUNCE             = 'oz';
    const POUND             = 'lb';
    const STONE             = 'st';
    const SHORT_TON         = 's. t.';
    const LONG_TON          = 'l. t.';

    // todo: add more units
}