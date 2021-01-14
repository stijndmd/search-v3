<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class CalendarTypeTest extends TestCase
{
    public function testConstructor(): void
    {
        $calendarType = new CalendarType('single');

        $key = $calendarType->getKey();
        $value = $calendarType->getValue();

        $this->assertEquals($key, 'calendarType');
        $this->assertEquals($value, 'single');
    }
}
