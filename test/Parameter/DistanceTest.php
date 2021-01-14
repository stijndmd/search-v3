<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class DistanceTest extends TestCase
{
    public function testConstructor(): void
    {
        $distance = new Distance(15, Distance::UNIT_KILOMETER);

        $key = $distance->getKey();
        $value = $distance->getValue();

        self::assertEquals($key, 'distance');
        self::assertEquals($value, '15km');
    }

    public function testConstructorWithWrongUnit(): void
    {
        $this->expectException(\Exception::class);
        new Distance(15, 'wrong unit');
    }
}
