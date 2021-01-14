<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class AddressCountryTest extends TestCase
{
    public function testConstructor(): void
    {
        $query = new AddressCountry('BE');

        $key = $query->getKey();
        $value = $query->getValue();

        self::assertEquals('addressCountry', $key);
        self::assertEquals('BE', $value);
    }
}
