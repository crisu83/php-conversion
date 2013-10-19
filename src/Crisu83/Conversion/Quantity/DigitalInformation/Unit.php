<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity\DigitalInformation;

use \Crisu83\Conversion\Quantity\Unit as BaseUnit;

/**
 * Class Unit
 * @package Crisu83\Conversion\Quantity\DigitalInformation
 */
class Unit extends BaseUnit
{
    const BIT       = 'b';
    const BYTE      = 'B';
    const KILOBIT   = 'kb';
    const KILOBYTE  = 'kB';
    const MEGABIT   = 'Mb';
    const MEGABYTE  = 'MB';
    const GIGABIT   = 'Gb';
    const GIGABYTE  = 'GB';
    const TERABIT   = 'Tb';
    const TERABYTE  = 'TB';
    const PETABIT   = 'Pb';
    const PETABYTE  = 'PB';
}