<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\CalendarType;

class CalendarTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $calendarType = new CalendarType('single');

        $key = $calendarType->getKey();
        $value = $calendarType->getValue();

        $this->assertEquals($key, 'calendarType');
        $this->assertEquals($value, 'single');
    }
}
