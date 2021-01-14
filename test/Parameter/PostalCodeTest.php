<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class PostalCodeTest extends TestCase
{
    public function testConstructor(): void
    {
        $query = new PostalCode('3000');

        $key = $query->getKey();
        $value = $query->getValue();

        self::assertEquals($key, 'postalCode');
        self::assertEquals($value, '3000');
    }
}
