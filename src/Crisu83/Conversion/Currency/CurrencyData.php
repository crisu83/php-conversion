<?php
namespace Crisu83\Conversion\Currency;

class CurrencyData
{

    private $currencies = array();

    private $native;

    public function addCurrency($name, $value)
    {
        $this->currencies[$name] = $value;
    }

    public function setNative($name)
    {
        $this->currencies[$name] = 1;
        $this->native = $name;
    }

    public function getCurrencies()
    {
        return $this->currencies;
    }

    public function getNative()
    {
        return $this->native;
    }

} 