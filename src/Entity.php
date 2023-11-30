<?php

namespace PhpTypeTest;

/**
 * Class Entity
 *
 * Represents an entity with two properties.
 */
class Entity
{
    /** @var int The value of the first property. */
    private $property1;

    /** @var string The value of the second property. */
    private $property2;

    /**
     * Entity constructor.
     *
     * @param int $property1 The initial value for property1.
     * @param string $property2 The initial value for property2.
     */
    public function __construct(int $property1, string $property2)
    {
        $this->property1 = $property1;
        $this->property2 = $property2;
    }

    /**
     * Get the value of property1.
     *
     * @return int The value of property1.
     */
    public function getProperty1(): int
    {
        return $this->property1;
    }

    /**
     * Set the value of property1.
     *
     * @param int $property1 The new value for property1.
     */
    public function setProperty1(int $property1): void
    {
        $this->property1 = $property1;
    }

    /**
     * Get the value of property2.
     *
     * @return string The value of property2.
     */
    public function getProperty2(): string
    {
        return $this->property2;
    }

    /**
     * Set the value of property2.
     *
     * @param string $property2 The new value for property2.
     */
    public function setProperty2(string $property2): void
    {
        $this->property2 = $property2;
    }
}
