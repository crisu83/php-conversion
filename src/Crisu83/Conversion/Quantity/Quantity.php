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
     * @var mixed current value
     */
    protected $value;

    /**
     * @var string unit name
     */
    protected $unit;

    /**
     * @var string native unit name
     * Override this in each quantity subclass.
     */
    protected static $native;

    /**
     * @var array conversion map (unit => native unit)
     * Override this in each quantity subclass.
     */
    protected static $conversionMap = array();

    /**
     * Creates a new quantity.
     * @param float $quantity quantity value
     * @param string $unit quantity unit
     */
    public function __construct($quantity, $unit)
    {
        $this->unit = $unit;
        $this->value = $quantity;
    }

    /**
     * Adds a quantity to this quantity.
     * @param float $quantity value to add
     * @param string $unit quantity unit
     * @return Quantity this quantity
     */
    public function add($quantity, $unit = null)
    {
        if ($unit === null) {
            $unit = $this->unit;
        }
        /** @var Quantity $quantity */
        $quantity = new static($quantity, $unit);
        $quantity->to($this->unit);
        $this->value += $quantity->getValue();
        return $this;
    }

    /**
     * Subtracts a quantity from this quantity,
     * @param float $quantity value to subtract
     * @param string $unit quantity unit
     * @return Quantity this quantity
     */
    public function sub($quantity, $unit = null)
    {
        if ($unit === null) {
            $unit = $this->unit;
        }
        /** @var Quantity $quantity */
        $quantity = new static($quantity, $unit);
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
        $this->value = $this->convert($this->unit, $unit, $this->value);
        $this->unit = $unit;
        return $this;
    }

    /**
     * Converts a value from one unit to another.
     * @param string $from unit to convert from
     * @param string $to unit to convert to
     * @param mixed $value value to convert
     * @return float converted value
     */
    protected function convert($from, $to, $value)
    {
        return ($value * $this->getConversionRate($from)) / $this->getConversionRate($to);
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
                static::$native,
                $unit
            ));
        }
        return static::$conversionMap[$unit];
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
    public function out()
    {
        return $this->format() . ' ' . $this->unit;
    }

    /**
     * Magic function for outputting this quantity.
     * @return string this quantity as a string
     */
    public function __toString()
    {
        return $this->out();
    }
}