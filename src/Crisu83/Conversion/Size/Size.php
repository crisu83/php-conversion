<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Size;

/**
 * Class Size
 * @package Crisu83\Conversion\Size
 */
class Size
{
    /**
     * @var string
     */
    protected $system;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var array conversion table between different systems
     * Override this in each quantity subclass.
     */
    protected static $conversionTable = array();

    /**
     * Creates a new size.
     * @param string $size size string.
     */
    public function __construct($size)
    {
        list ($value, $system) = $this->parseSize($size);
        $this->system = $system;
        $this->value = $value;
    }

    /**
     * Parses a size string.
     * @param string $size size string
     * @return array an array with value and system
     * @throws \Exception if the size cannot be parsed
     */
    protected function parseSize($size)
    {
        if (!is_string($size)) {
            throw new \Exception('Size must be a string.');
        }
        $pieces = explode(' ', $size);
        if (!isset($pieces[0], $pieces[1])) {
            throw new \Exception(sprintf('Size quantity.'), $size);
        }
        return $pieces;
    }

    /**
     * Finds this size in another system.
     * @param string $system system name
     * @return string the value
     * @throws \Exception if the lookup fails
     */
    protected function lookup($system)
    {
        foreach (static::$conversionTable as $row) {
            if (isset($row[$this->system], $row[$system]) && $row[$this->system] === $this->value) {
                return $row[$system];
            }
        }
        throw new \Exception(sprintf(
            'Failed to look up value "%s" from system "%s" to system "%s"',
            $this->value,
            $this->system,
            $system
        ));
    }

    /**
     * Converts this size to another system.
     * @param string $system system to convert to
     * @return Size this size
     */
    public function to($system)
    {
        $this->value = $this->lookup($system);
        $this->system = $system;
        return $this;
    }

    /**
     * Converts this size into a string
     * @return string this size as a string
     */
    public function __toString()
    {
        return $this->value . ' ' . $this->system;
    }
}