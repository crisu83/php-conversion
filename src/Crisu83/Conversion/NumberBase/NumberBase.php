<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\NumberBase;

/**
 * Class NumberBase
 * @package Crisu83\Conversion\NumberBase
 */
class NumberBase
{
    const BINARY = 2;
    const OCTAL = 8;
    const DECIMAL = 10;
    const HEXADECIMAL = 16;
    const VIGESIMAL = 20;

    /**
     * @var mixed current value
     */
    protected $value;

    /**
     * @var string unit name
     */
    protected $unit;

    /**
     * Creates a new number base conversion.
     * @param string $value value
     * @param int $unit base name, see class constants
     */
    public function __construct($value = null, $unit = null)
    {
        if ($unit !== null) {
            $this->setUnit($unit);
        }

        if ($value !== null) {
            $this->setValue($value);
        }
    }

    /**
     * Sets the value
     * @param string $value value
     * @return NumberBase
     */
    public function setValue($value)
    {
        $this->value = $this->parseValue($value);
        return $this;
    }

    /**
     * Sets the unit
     * @param string $unit unit name
     * @return NumberBase
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    protected function parseValue($value)
    {
        if ($this->unit == self::BINARY && substr($value, 0, 1) == 'b') {
            return substr($value, 1);
        } else if ($this->unit == self::OCTAL && substr($value, 0, 1) == 'o') {
            return substr($value, 1);
        } else if ($this->unit == self::HEXADECIMAL && substr($value, 0, 2) == '0x') {
            return substr($value, 2);
        }

        return $value;
    }

    /**
     * Converts this quantity to another unit.
     * @param int $unit unit to convert to
     * @return NumberBase
     */
    public function to($unit)
    {
        $this->value = $this->convert($unit, $this->value);
        $this->unit = $unit;
        return $this;
    }

    /**
     * Converts a value from one unit to another.
     * @param int $to unit to convert to
     * @param mixed $val value to convert
     * @return float converted value
     */
    protected function convert($to, $val)
    {
        $val = $this->parseValue($val);

        return base_convert($val, $this->unit, $to);
    }

    public function format()
    {
        if ($this->unit == self::BINARY) {
            return 'b'.$this->value;
        }
        if ($this->unit == self::OCTAL) {
            return 'o'.$this->value;
        }
        if ($this->unit == self::HEXADECIMAL) {
            return '0x'.$this->value;
        }

        return $this->value;
    }

    /**
     * Magic function for outputting this quantity.
     * @return string this quantity as a string
     */
    public function __toString()
    {
        return $this->format();
    }
}
