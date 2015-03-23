<?php

use Crisu83\Conversion\NumberBase\NumberBase;

class NumberBaseTest extends \Codeception\TestCase\Test
{
    public function testNumberParsing()
    {
        $number = new NumberBase("0xff", NumberBase::HEXADECIMAL);
        $this->assertEquals('0xff', $number->__toString());

        $number = new NumberBase("b1001", NumberBase::BINARY);
        $this->assertEquals('b1001', $number->__toString());

        $number = new NumberBase(16, NumberBase::DECIMAL);
        $this->assertEquals(16, $number->__toString());
    }

    public function testNumberBaseConvertDecimalToHex()
    {
        $numberBase = new NumberBase(16, NumberBase::DECIMAL);
        $this->assertEquals('0x10', $numberBase->to(NumberBase::HEXADECIMAL)->format());
    }

    public function testNumberBaseConvertDecimalToBinary()
    {
        $numberBase = new NumberBase(15, NumberBase::DECIMAL);
        $this->assertEquals('b1111', $numberBase->to(NumberBase::BINARY)->format());
    }

    public function testNumberBaseConvertDecimalToOctal()
    {
        $numberBase = new NumberBase(15, NumberBase::DECIMAL);
        $this->assertEquals('o17', $numberBase->to(NumberBase::OCTAL)->format());
    }

    public function testNumberBaseConvertHexToDecimal()
    {
        $numberBase = new NumberBase("0x10", NumberBase::HEXADECIMAL);
        $this->assertEquals('16', $numberBase->to(NumberBase::DECIMAL)->format());
    }

    public function testNumberBaseConvertHexToBinary()
    {
        $numberBase = new NumberBase("0x10", NumberBase::HEXADECIMAL);
        $this->assertEquals('b10000', $numberBase->to(NumberBase::BINARY)->format());
    }

    public function testNumberBaseConvertHexToOctal()
    {
        $numberBase = new NumberBase("0x10", NumberBase::HEXADECIMAL);
        $this->assertEquals('o20', $numberBase->to(NumberBase::OCTAL)->format());
    }

}
