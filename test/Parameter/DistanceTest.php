<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\Distance;

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
}
