<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class PostalCodeTest extends TestCase
{
    public function testConstructor()
    {
        $query = new PostalCode('3000');

        $key = $query->getKey();
        $value = $query->getValue();

        $this->assertEquals($key, 'postalCode');
        $this->assertEquals($value, '3000');
    }
}
