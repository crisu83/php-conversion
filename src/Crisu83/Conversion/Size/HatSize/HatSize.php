<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Size\HatSize;

use Crisu83\Conversion\Size\Size;

/**
 * Class HatSize
 * @package Crisu83\Conversion\Size\HatSize
 */
class HatSize extends Size
{
    /**
     * @var array conversion table between different systems
     */
    protected static $conversionTable = array(
        array('cm' => '34', 'UK' => '4 1/8',  'US' => '4 1/4',    'in' => '13.386'),
        array('cm' => '35', 'UK' => '4 1/4',  'US' => '4 3/8',    'in' => '13.78'),
        array('cm' => '36', 'UK' => '4 3/8',  'US' => '4 1/2',    'in' => '14.173'),
        array('cm' => '37', 'UK' => '4 1/2',  'US' => '4 5/8',    'in' => '14.567'),
        array('cm' => '38', 'UK' => '4 5/8',  'US' => '4 3/4',    'in' => '14.961'),
        array('cm' => '39', 'UK' => '4 3/4',  'US' => '4 7/8',    'in' => '15.354'),
        array('cm' => '40', 'UK' => '4 7/8',  'US' => '4',        'in' => '15.748'),
        array('cm' => '41', 'UK' => '5',      'US' => '5 1/8',    'in' => '16.142'),
        array('cm' => '42', 'UK' => '5 1/8',  'US' => '5 1/4',    'in' => '16.535'),
        array('cm' => '43', 'UK' => '5 1/4',  'US' => '5 3/8',    'in' => '16.929'),
        array('cm' => '44', 'UK' => '5 3/8',  'US' => '5 1/2',    'in' => '17.323'),
        array('cm' => '45', 'UK' => '5 1/2',  'US' => '5 5/8',    'in' => '17.717'),
        array('cm' => '46', 'UK' => '5 5/8',  'US' => '5 3/4',    'in' => '18.11'),
        array('cm' => '47', 'UK' => '5 3/4',  'US' => '5 7/8',    'in' => '18.504'),
        array('cm' => '48', 'UK' => '5 7/8',  'US' => '6',        'in' => '18.898'),
        array('cm' => '49', 'UK' => '6',      'US' => '6 1/8',    'in' => '19.291'),
        array('cm' => '50', 'UK' => '6 1/8',  'US' => '6 1/4',    'in' => '19.685'),
        // todo: add more values
    );
} 