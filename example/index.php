<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

use Crisu83\Conversion\Quantity\DigitalInformation\DigitalInformation;
use Crisu83\Conversion\Quantity\Length\Length;
use Crisu83\Conversion\NumberBase\NumberBase;
use Crisu83\Conversion\Size\HatSize\HatSize;
use Crisu83\Conversion\Size\ShoeSize\ChildShoeSize;

use Crisu83\Conversion\Quantity\Length\Unit as LengthUnit;
use Crisu83\Conversion\Quantity\DigitalInformation\Unit as DIUnit;
use Crisu83\Conversion\Size\HatSize\System as HatSizeSystem;
use Crisu83\Conversion\Size\ShoeSize\System as ShoeSizeSystem;

require(dirname(__DIR__) . '/vendor/autoload.php');

$length = new Length(1, LengthUnit::METRE);
echo $length . '<br>';
echo $length->add(1, LengthUnit::FOOT) . '<br>';
echo $length->add(5)->sub(2, LengthUnit::FOOT) . '<br>';
echo $length->to(LengthUnit::YARD) . '<br>';

echo '<br>';

$di = new DigitalInformation(1000, DIUnit::MEGABYTE);
echo $di . '<br>';
echo $di->to(DIUnit::BIT)->out(2, '.', '') . '<br>';
echo $di->to(DIUnit::GIGABIT) . '<br>';
echo $di->to(DIUnit::TERABYTE)->out(10) . '<br>';

echo '<br>';

$number = new NumberBase("0xff", NumberBase::HEXADECIMAL);
echo $number .'<br>';
echo $number->to(NumberBase::DECIMAL).'<br>';
echo $number->to(NumberBase::OCTAL).'<br>';
echo $number->to(NumberBase::BINARY).'<br>';


$hatSize = new HatSize(40, HatSizeSystem::CENTIMETRE);
echo $hatSize . '<br>';
echo $hatSize->to(HatSizeSystem::AMERICAN) . '<br>';
echo $hatSize->to(HatSizeSystem::BRITISH) . '<br>';
echo $hatSize->to(HatSizeSystem::INCH) . '<br>';

echo '<br>';

$shoeSize = new ChildShoeSize(20, ShoeSizeSystem::EUROPEAN);
echo $shoeSize . '<br>';
echo $shoeSize->to(ShoeSizeSystem::AMERICAN) . '<br>';
echo $shoeSize->to(ShoeSizeSystem::BRITISH) . '<br>';
echo $shoeSize->to(ShoeSizeSystem::INCH) . '<br>';
