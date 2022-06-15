<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\Pressure;

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Pressure
 */
class Unit extends BaseUnit
{
    const PASCAL                    = 'Pa';
    const HECTOPASCAL               = 'hPa';
    const KILOPASCAL                = 'kPa';
    const MEGAPASCAL                = 'MPa';
    const BAR                       = 'bar';
    const MILLIMETRES_OF_MERCURY    = 'mmHg';
    const ATMOSPHERE                = 'atm';
    const INCHES_OF_MERCURY         = 'inHg';
    const POUNDS_PER_SQUARE_INCH    = 'psi';
}