<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\AvailableTo;

class AvailableToTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = new \DateTime('2017-04-11T12:08:01+01:00');
        $id = new AvailableTo($dateTime);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('availableTo', $key);
        $this->assertEquals($dateTime, $value);
    }
}
