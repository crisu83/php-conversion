<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Size;

/**
 * Class ShoeSize
 * @package Crisu83\Conversion\Size
 */
class ShoeSize extends Size
{
    /**
     * @var array conversion table between different systems
     */
    protected static $conversionTable = array(
        // infant sizes (0 - 12 months)
        array('EUR' => '16', 'UK' => '0 - 0.5', 'US' => '0.5 - 1',      'cm' => '8.3',  'in' => '3.25'),
        array('EUR' => '17', 'UK' => '1',       'US' => '1.5 - 2',      'cm' => '9.2',  'in' => '3.625'),
        array('EUR' => '18', 'UK' => '1.5 - 2', 'US' => '2.5 - 3',      'cm' => '10.2', 'in' => '4'),
        array('EUR' => '19', 'UK' => '2.5 - 3', 'US' => '3.5 - 4',      'cm' => '10.8', 'in' => '4.25'),
        array('EUR' => '20', 'UK' => '3.5 - 4', 'US' => '4.5 - 5',      'cm' => '11.7', 'in' => '4.625'),
        // kids sizes (1 - 5 years)
        array('EUR' => '21', 'UK' => '4.5',     'US' => '5.5',          'cm' => '12.7', 'in' => '5'),
        array('EUR' => '22', 'UK' => '5 - 5.5', 'US' => '6 - 6.5',      'cm' => '13',   'in' => '5.125'),
        array('EUR' => '23', 'UK' => '6 - 6.5', 'US' => '7 - 7.5',      'cm' => '14',   'in' => '5.5'),
        array('EUR' => '24', 'UK' => '7',       'US' => '8',            'cm' => '14.6', 'in' => '5.75'),
        array('EUR' => '25', 'UK' => '7.5 - 8', 'US' => '8.5 - 9',      'cm' => '15.2', 'in' => '6'),
        array('EUR' => '26', 'UK' => '8.5',     'US' => '9.5',          'cm' => '15.9', 'in' => '6.25'),
        array('EUR' => '27', 'UK' => '9 - 9.5', 'US' => '10 - 10.5',    'cm' => '16.5', 'in' => '6.5'),
        array('EUR' => '28', 'UK' => '10',      'US' => '11',           'cm' => '17.1', 'in' => '6.75'),
        array('EUR' => '29', 'UK' => '10.5',    'US' => '11.5',         'cm' => '17.8', 'in' => '7'),
        array('EUR' => '30', 'UK' => '11',      'US' => '12',           'cm' => '18.1', 'in' => '7.125'),
    );
} 