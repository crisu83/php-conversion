<?php

namespace Crisu83\Conversion\Quantity\Length;

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\Length
 */
class Unit extends BaseUnit
{
    // Metric system
    const MILLIMETRE        = 'mm';
    const CENTIMETRE        = 'cm';
    const METRE             = 'm';
    const KILOMETRE         = 'km';
    // Imperial system
    const INCH              = 'in';
    const FOOT              = 'ft';
    const YARD              = 'yd';
    const MILE              = 'mi';
    // Other systems
    const NAUTICAL_MILE     = 'nmi';
} 