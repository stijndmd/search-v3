<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class DistanceTest extends TestCase
{
    public function testConstructor()
    {
        $distance = new Distance(15, Distance::UNIT_KILOMETER);

        $key = $distance->getKey();
        $value = $distance->getValue();

        $this->assertEquals($key, 'distance');
        $this->assertEquals($value, '15km');
    }

    public function testConstructorWithWrongUnit()
    {
        $this->expectException(\Exception::class);
        new Distance(15, 'wrong unit');
    }
}
