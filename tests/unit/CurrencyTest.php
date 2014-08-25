<?php
use Crisu83\Conversion\Currency\Currency;
use Crisu83\Conversion\Currency\CurrencyData;

class CurrencyTest extends \Codeception\TestCase\Test
{

    /**
     * @var \CodeGuy
     */
    protected $codeGuy;

    /**
     * @return CurrencyData
     */
    private function getCurrencyData()
    {
        $currencyData = new CurrencyData();
        $currencyData->addCurrency('USD', 1);
        $currencyData->addCurrency('CAD', 5);
        $currencyData->addCurrency('DKK', 7.5);
        $currencyData->addCurrency('SEK', 9.1489);
        $currencyData->addCurrency('AUD', 1.4175);
        $currencyData->setNative('EUR');
        return $currencyData;
    }

    public function testCanConvertCurrency()
    {
        $currency = new Currency(1, 'EUR', $this->getCurrencyData());
        $this->assertEquals('1.00', $currency->to('USD')->format());
    }

    public function testCanConvertToEuro()
    {
        $currency = new Currency(100, 'CAD', $this->getCurrencyData());
        $this->assertEquals('500.00', $currency->to('EUR')->format());
    }

    public function testCanConvertToDkk()
    {
        $currency = new Currency(100, 'DKK', $this->getCurrencyData());
        $this->assertEquals('750.00', $currency->to('EUR')->format());
    }

    public function testCanConvertToSek()
    {
        $currency = new Currency(100, 'EUR', $this->getCurrencyData());
        $this->assertEquals('10.93', $currency->to('SEK')->format());
    }

    public function testCanConvertFromUsdToCad()
    {
        $currency = new Currency(1, 'USD', $this->getCurrencyData());
        $this->assertEquals('0.20', $currency->to('CAD')->format());
    }

    public function testCanAddAndSubSameCurrency()
    {
        $currency = new Currency(1, 'EUR', $this->getCurrencyData());
        $currency->add(5); // 6 eur
        $currency->sub(2); // 4 eur
        $this->assertEquals('4.00', $currency->to('EUR')->format());
    }

    public function testCanAddAndSubDifferentCurriencies()
    {
        $currency = new Currency(1, 'USD', $this->getCurrencyData());
        $currency->add(1, 'DKK');
        $this->assertEquals('8.50 EUR', $currency->to('EUR')->__toString());
        $this->assertEquals('8.50 EUR', $currency->toNativeUnit());
    }

    public function testCanAddAndSubDifferentCurriencies_2()
    {
        $currency = new Currency(100, 'EUR', $this->getCurrencyData());
        $currency->add(1, 'SEK');
        $currency->sub(10, 'DKK');
        $currency->sub(11.25, 'AUD');
        $this->assertEquals('12.84', $currency->to('AUD')->format());
        $this->assertEquals('AUD', $currency->getUnit());
    }

    public function testUnknownCurrency()
    {
        $this->setExpectedException('Exception');
        $currency = new Currency(100, 'EUR', $this->getCurrencyData());
        $this->assertEquals(125.00, $currency->to('FOO')->getUnit());
    }

} 