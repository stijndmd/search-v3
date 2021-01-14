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

        self::assertEquals('calendarType', $key);
        self::assertEquals('single', $value);
    }
}
