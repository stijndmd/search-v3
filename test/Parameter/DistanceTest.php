<?php

namespace CultuurNet\SearchV3\Parameter;

class DistanceTest extends \PHPUnit_Framework_TestCase
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
