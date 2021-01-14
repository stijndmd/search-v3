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

        self::assertEquals('distance', $key);
        self::assertEquals('15km', $value);
    }

    public function testConstructorWithWrongUnit(): void
    {
        $this->expectException(\Exception::class);
        new Distance(15, 'wrong unit');
    }
}
