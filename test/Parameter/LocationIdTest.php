<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class LocationIdTest extends TestCase
{
    public function testConstructor(): void
    {
        $id = new LocationId('b8bff8fa-988a-44db-8dd8-70bef77f3933');

        $key = $id->getKey();
        $value = $id->getValue();

        self::assertEquals($key, 'locationId');
        self::assertEquals($value, 'b8bff8fa-988a-44db-8dd8-70bef77f3933');
    }
}
