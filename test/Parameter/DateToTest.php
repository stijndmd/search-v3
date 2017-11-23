<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\DateTo;

class DateToTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $id = new DateTo('23-11-2017 10:00', '+1');

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals($key, 'dateTo');
        $this->assertEquals($value, '2017-11-23T10:00:00+01:00');
    }
}
