<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Size\ShoeSize;

use Crisu83\Conversion\Size\Size;

/**
 * Class Shoe
 * @package Crisu83\Conversion\Size\ShoeSize
 */
class ShoeSize extends Size
{
    /**
     * @var array conversion table between different systems
     */
    protected static $conversionTable = array(
        array('EUR' => '32', 'UK' => '0 - 0.5'),
        array('EUR' => '33', 'UK' => '0.5 - 1.5'),
        array('EUR' => '34', 'UK' => '1.5 - 2.5'),
        array('EUR' => '35', 'UK' => '2.5 - 3.5'),
        array('EUR' => '36', 'UK' => '3.5'),
        array('EUR' => '37', 'UK' => '4 - 4.5'),
        array('EUR' => '38', 'UK' => '4.5 - 5.5'),
        array('EUR' => '39', 'UK' => '5.5 - 6'),
        array('EUR' => '40', 'UK' => '6 - 7'),
        array('EUR' => '41', 'UK' => '7 - 7.5'),
        array('EUR' => '42', 'UK' => '7.5 - 8.5'),
        array('EUR' => '43', 'UK' => '8.5 - 9'),
        array('EUR' => '44', 'UK' => '9.5 - 10'),
        array('EUR' => '45', 'UK' => '10 - 11'),
        array('EUR' => '46', 'UK' => '11 - 11.5'),
        array('EUR' => '47', 'UK' => '11.5 - 12.5'),
        array('EUR' => '48', 'UK' => '12.5 - 13'),
        array('EUR' => '49', 'UK' => '13-14'),
    );
} 