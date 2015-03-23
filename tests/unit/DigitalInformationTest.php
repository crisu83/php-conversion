<?php

use Crisu83\Conversion\Quantity\DigitalInformation\DigitalInformation;
use Crisu83\Conversion\Quantity\DigitalInformation\Unit;

class DigitalInformationTest extends \Codeception\TestCase\Test
{
    public function testSimple()
    {
        $di = new DigitalInformation(1024, Unit::BYTE);
        $this->assertEquals('1,024.00 B', $di->out());
        $this->assertEquals('1.00 kB', $di->to(Unit::KILOBYTE)->out());

        $di = new DigitalInformation(1, 'ZB');
        $this->assertEquals('1.00 ZB', $di->out());
        $this->assertEquals('1,024.00 EB', $di->to(Unit::EXABYTE)->out());
    }
}
