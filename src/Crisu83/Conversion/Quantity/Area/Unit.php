<?php
/**
 * Created by PhpStorm.
 * User: Crisu
 * Date: 19.10.2013
 * Time: 15.34
 */

namespace Crisu83\Conversion\Quantity\Area;

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Area
 */
class Unit extends BaseUnit
{
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
} 