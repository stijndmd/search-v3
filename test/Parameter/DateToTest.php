<?php

namespace CultuurNet\SearchV3\Parameter;

use DateTime;
use PHPUnit\Framework\TestCase;

class DateToTest extends TestCase
{
    public function testConstructor(): void
    {
        $dateTime = new DateTime('2017-11-23T10:00:00+01:00');
        $dateTo = new DateTo($dateTime);

        $key = $dateTo->getKey();
        $value = $dateTo->getValue();

        self::assertEquals('dateTo', $key);
        self::assertEquals('2017-11-23T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithAtomString(): void
    {
        $dateTime = '2017-11-23T10:00:00+01:00';
        $dateTo = DateTo::createFromAtomString($dateTime);

        $key = $dateTo->getKey();
        $value = $dateTo->getValue();

        self::assertEquals('dateTo', $key);
        self::assertEquals('2017-11-23T10:00:00+01:00', $value);
    }

    public function testWithWildcard(): void
    {
        $id = DateTo::wildcard();

        $key = $id->getKey();
        $value = $id->getValue();

        self::assertEquals('dateTo', $key);
        self::assertEquals('*', $value);
    }
}
