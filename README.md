php-conversion
==============

Library for converting units and sizes in PHP.

Example usage:

```php
use Crisu83\Conversion\Quantity\Length;
use Crisu83\Conversion\Size\HatSize;
use Crisu83\Conversion\Size\ShoeSize;

require(dirname(__DIR__) . '/vendor/autoload.php');

$length = new Length(1, 'm');
echo $length . '<br>';
echo $length->add(1, 'ft') . '<br>';
echo $length->add(5)->sub(2, 'ft') . '<br>';
echo $length->to('yd') . '<br>';

echo '<br>';

$hatSize = new HatSize(40, 'cm');
echo $hatSize . '<br>';
echo $hatSize->to('US') . '<br>';
echo $hatSize->to('UK') . '<br>';
echo $hatSize->to('in') . '<br>';

echo '<br>';

$shoeSize = new ShoeSize(20, 'EUR');
echo $shoeSize . '<br>';
echo $shoeSize->to('US') . '<br>';
echo $shoeSize->to('UK') . '<br>';
echo $shoeSize->to('in') . '<br>';
```

Sample output:

```
1.00 m
4.28 m
2.72 m
2.49 yd

40 cm
4 US
4 7/8 UK
15.748 in

20 EUR
4.5 - 5 US
3.5 - 4 UK
4.625 in
```