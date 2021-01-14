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

        $this->assertEquals('addressCountry', $key);
        $this->assertEquals('BE', $value);
    }
}
