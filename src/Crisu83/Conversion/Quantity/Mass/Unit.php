<?php
/**
 * Created by PhpStorm.
 * User: Crisu
 * Date: 19.10.2013
 * Time: 15.41
 */

namespace Crisu83\Conversion\Quantity\Mass;

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Mass
 */
class Unit extends BaseUnit
{
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
} 