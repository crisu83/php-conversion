<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

use Crisu83\Conversion\Quantity\Length;
use Crisu83\Conversion\Size\HatSize;
use Crisu83\Conversion\Size\ShoeSize;

require(dirname(__DIR__) . '/vendor/autoload.php');

$length = new Length('1 m');
echo $length . '<br>';
echo $length->add('1 ft') . '<br>';
echo $length->add('5 m')->subtract('2 ft') . '<br>';
echo $length->to('yd') . '<br>';

echo '<br>';

$hatSize = new HatSize('40 cm');
echo $hatSize->to('US') . '<br>';
echo $hatSize->to('UK') . '<br>';
echo $hatSize->to('in') . '<br>';

echo '<br>';

$shoeSize = new ShoeSize('20 EUR');
echo $shoeSize->to('US') . '<br>';
echo $shoeSize->to('UK') . '<br>';
echo $shoeSize->to('in') . '<br>';