<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class AddressCountryTest extends TestCase
{
    public function testConstructor()
    {
        $query = new AddressCountry('BE');

        $key = $query->getKey();
        $value = $query->getValue();

        $this->assertEquals($key, 'addressCountry');
        $this->assertEquals($value, 'BE');
    }
}
