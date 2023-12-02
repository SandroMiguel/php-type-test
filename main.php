<?php
require __DIR__ . '/vendor/autoload.php';

use PhpTypeTest\SomeClass;

echo "Classe Entity usage!\n";
echo "===================\n";

$someArray = [
    'someInt' => 123,
    'someString' => 'Some text',
];
SomeClass::someMethodWithWarning($someArray);
echo "===================\n";
SomeClass::someMethodWithExceptions($someArray);
echo "===================\n";
SomeClass::someMethodWithPhpType($someArray);
