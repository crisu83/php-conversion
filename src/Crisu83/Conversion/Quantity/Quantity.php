<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity;

/**
 * Class Quantity
 * @package Crisu83\Conversion\Quantity
 */
abstract class Quantity
{
    /**
     * @var string quantity name
     */
    protected $name;

    /**
     * @var string unit name
     */
    protected $unit;

    /**
     * @var string native unit name
     */
    protected $native;

    /**
     * @var mixed current value
     */
    protected $value;

    /**
     * @var array conversion map (unit => native unit)
     * Override this in each quantity subclass.
     */
    protected static $conversionMap = array();

    /**
     * Creates a new quantity.
     * @param string $quantity quantity string
     */
    public function __construct($quantity)
    {
        list ($value, $unit) = $this->parseQuantity($quantity);
        $this->unit = $unit;
        $this->value = (float)$value;
    }

    /**
     * Parses a quantity string.
     * @param string $quantity quantity string
     * @return array an array with value and unit
     * @throws \Exception if the quantity cannot be parsed
     */
    protected function parseQuantity($quantity)
    {
        if (!is_string($quantity)) {
            throw new \Exception('Quantity must be a string.');
        }
        $pieces = explode(' ', $quantity);
        if (!isset($pieces[0], $pieces[1])) {
            throw new \Exception(sprintf('Malformed quantity.'), $quantity);
        }
        return $pieces;
    }

    /**
     * Returns the conversion rate for a unit.
     * @param string $unit unit name
     * @return mixed conversion rate
     * @throws \Exception if the conversion rate is not defined.
     */
    protected function getConversionRate($unit)
    {
        if (!isset(static::$conversionMap[$unit])) {
            throw new \Exception(sprintf(
                'Conversion rate between "%s" and "%s" is not defined.',
                $this->native,
                $unit
            ));
        }
        return static::$conversionMap[$unit];
    }

    /**
     * Adds a quantity to this quantity.
     * @param mixed $quantity quantity to add.
     * @return Quantity this quantity
     */
    public function add($quantity)
    {
        if (is_string($quantity)) {
            /** @var Quantity $quantity */
            $quantity = new static($quantity);
        }
        $quantity->to($this->unit);
        $this->value += $quantity->getValue();
        return $this;
    }

    /**
     * Subtracts a quantity from this quantity,
     * @param mixed $quantity quantity to add.
     * @return Quantity this quantity
     */
    public function subtract($quantity)
    {
        if (is_string($quantity)) {
            /** @var Quantity $quantity */
            $quantity = new static($quantity);
        }
        $quantity->to($this->unit);
        $this->value -= $quantity->getValue();
        return $this;
    }

    /**
     * Converts this quantity to another unit.
     * @param string $unit unit to convert to
     * @return Quantity this quantity
     */
    public function to($unit)
    {
        $value = $this->value / $this->getConversionRate($this->unit);
        $this->value = $value * $this->getConversionRate($unit);
        $this->unit = $unit;
        return $this;
    }

    /**
     * Formats this quantity.
     * @param int $decimals number of decimals (default to 2)
     * @param string $decPoint decimal symbol (defaults to '.')
     * @param string $thousandSep thousand separator (defaults to ',')
     * @return string formatted quantity
     */
    public function format($decimals = 2, $decPoint = '.', $thousandSep = ',')
    {
        return number_format($this->value, $decimals, $decPoint, $thousandSep);
    }

    /**
     * Returns the unit for this quantity.
     * @return string unit
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Returns the value for this quantity.
     * @return float value
     */
    public function getValue()
    {
        return (float)$this->value;
    }

    /**
     * Converts this quantity into a string
     * @return string this quantity as a string
     */
    public function __toString()
    {
        return $this->format() . ' ' . $this->unit;
    }
}