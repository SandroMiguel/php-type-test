<?php

namespace PhpTypeTest;

use PhpType\Validator;

class SomeClass
{
    /**
     * Some method that has a warning.
     *
     * Warning example: [phpstan] Parameter #1 $property1 of class
     *  PhpTypeTest\Entity constructor expects int, int|string given.
     *
     * @param array<string,int|string> $someArray The array.
     */
    public static function someMethodWithWarning(array $someArray): void
    {
        $someEntity = new Entity(
            $someArray['someInt'],
            $someArray['someString']
        );
        echo $someEntity->getProperty1() . "\n";
        echo $someEntity->getProperty2() . "\n";
    }

    /**
     * Some method with exception throwing for type mismatch.
     * It also prevents linter warnings.
     *
     * @param array<string,int|string> $someArray The array.
     *
     * @throws \InvalidArgumentException If the types do not match.
     */
    public static function someMethodWithExceptions(array $someArray): void
    {
        if (!isset($someArray['someInt']) || !\is_int($someArray['someInt'])) {
            throw new \InvalidArgumentException(
                'Invalid or missing integer value for "someInt".'
            );
        }

        if (!isset($someArray['someString']) || !\is_string($someArray['someString'])) {
            throw new \InvalidArgumentException(
                'Invalid or missing string value for "someString".'
            );
        }

        $someEntity = new Entity(
            $someArray['someInt'],
            $someArray['someString']
        );
        echo $someEntity->getProperty1() . "\n";
        echo $someEntity->getProperty2() . "\n";
    }

    /**
     * Some method using PhpType for type checking.
     *
     * @param array<string,int|string> $someArray The array.
     */
    public static function someMethodWithPhpType(array $someArray): void
    {
        $someInt = Validator::validate('someInt', $someArray['someInt'])->getIntValue();
        $someString = Validator::validate('someString', $someArray['someString'])->getStringValue();

        $someEntity = new Entity($someInt, $someString);
        echo $someEntity->getProperty1() . "\n";
        echo $someEntity->getProperty2() . "\n";
    }
}
