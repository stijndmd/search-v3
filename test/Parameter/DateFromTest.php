<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\DateFrom;

class DateFromTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $id = new DateFrom('21-12-2017 10:00', '+1');

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals($key, 'dateFrom');
        $this->assertEquals($value, '2017-12-21T10:00:00+01:00');
    }
}
