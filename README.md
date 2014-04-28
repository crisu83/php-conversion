php-conversion
==============

Library for converting units and sizes in PHP.

## Units supported

 * Angle
 * Area
 * Digital information
 * Electric current
 * Fuel consumption
 * Length
 * Mass
 * Pressure
 * Speed
 * Temperature
 * Time
 * Velocity
 * Volume

## Sizes supported

 * Hat size
 * Child shoe size

## Usage

Example usage:

```php
use Crisu83\Conversion\Quantity\Length\Length;
use Crisu83\Conversion\Quantity\DigitalInformation\DigitalInformation;
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
```

Sample output:

```
1.00 m
1.30 m
5.70 m
6.23 yd

1,000.00 MB
8388629474.89 b
7.81 Gb
0.0009534451 TB

40 cm
4 US
4 7/8 UK
15.748 in

20 EUR
4.5 - 5 US
3.5 - 4 UK
4.625 in
```