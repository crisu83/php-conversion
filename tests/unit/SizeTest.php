<?php
use Crisu83\Conversion\Size\HatSize\HatSize;
use Crisu83\Conversion\Size\HatSize\System as HatsizeSystem;

class SizeTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;

    public function testHatsizes()
    {
        $hatSize = new HatSize(40, HatsizeSystem::CENTIMETRE);
        $this->assertEquals('4', $hatSize->to(HatsizeSystem::AMERICAN)->format());
        $this->assertEquals('4 7/8', $hatSize->to(HatsizeSystem::BRITISH)->format());
        $this->assertEquals('15.748', $hatSize->to(HatsizeSystem::INCH)->format());
    }

    public function testHatsizeUnknown()
    {
        $this->setExpectedException('Exception');
        $hatSize = new HatSize(40, 'foo');
        $this->assertEquals('4 US', $hatSize->to('bar')->format());
    }

    public function testHatsizesToString()
    {
        $hatSize = new HatSize(40, HatsizeSystem::CENTIMETRE);
        $this->assertEquals(
            sprintf('%s %s', $hatSize->to(HatsizeSystem::AMERICAN)->format(), $hatSize->getSystem()),
            $hatSize->to(HatsizeSystem::AMERICAN)->__toString()
        );
    }
}