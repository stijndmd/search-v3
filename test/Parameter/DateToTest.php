<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\DateTo;

class DateToTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = new \DateTime('23-11-2017T10:00:00+01:00');
        $id = new DateTo($dateTime);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('dateTo', $key);
        $this->assertEquals($dateTime, $value);
    }
}
