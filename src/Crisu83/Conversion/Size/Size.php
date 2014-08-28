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
    protected $value;

    /**
     * @var string
     */
    protected $system;

    /**
     * @var array conversion table between different systems
     * Override this in each quantity subclass.
     */
    protected static $conversionTable = array();

    /**
     * Creates a new size.
     * @param mixed $size size value
     * @param string $system sizing system
     */
    public function __construct($size, $system)
    {
        $this->system = $system;
        $this->value = (string)$size;
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
     * Get the system
     * @return string
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Converts this size into a string
     * @return string this size as a string without system
     */
    public function format()
    {
        return $this->value;
    }

    /**
     * Converts this size into a string
     * @return string this size as a string with system
     */
    public function __toString()
    {
        return sprintf('%s %s', $this->format(), $this->getSystem());
    }
}