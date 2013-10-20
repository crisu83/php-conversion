<?php
use Codeception\Util\Stub;
use Crisu83\Conversion\Quantity\Length\Length;

class LengthTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;

    public function testAdd()
    {
        $length = new Length(1, 'm');
        $this->assertEquals('1.00 m', $length->out());
        $this->assertEquals('2.00 m', $length->add(1)->out());
        $this->assertEquals('2.30 m', $length->add(1, 'ft')->out());
    }

    public function testSub()
    {
        $length = new Length(5, 'ft');
        $this->assertEquals('5.00 ft', $length->out());
        $this->assertEquals('4.00 ft', $length->sub(1)->out());
        $this->assertEquals('0.72 ft', $length->sub(1, 'm')->out());
    }

    public function testTo()
    {
        $length = new Length(100, 'm');
        $this->assertEquals('100,000.00 mm', $length->to('mm')->out());
        $this->assertEquals('10,000.00 cm', $length->to('cm')->out());
        $this->assertEquals('0.10 km', $length->to('km')->out());
        $this->assertEquals('3,937.01 in', $length->to('in')->out());
        $this->assertEquals('328.08 ft', $length->to('ft')->out());
        $this->assertEquals('109.36 yd', $length->to('yd')->out());
        $this->assertEquals('0.06 mi', $length->to('mi')->out());
        $this->assertEquals('0.05 nmi', $length->to('nmi')->out());
    }

    public function testFormat()
    {
        $length = new Length(1234.56789, 'm');
        $this->assertEquals('1,234.57', $length->format());
        $this->assertEquals('1.234,568', $length->format(3, ',', '.'));
        $this->assertEquals('1234.6', $length->format(1, '.', ''));
    }
}