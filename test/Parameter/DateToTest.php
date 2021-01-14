<?php

namespace CultuurNet\SearchV3\Parameter;

use DateTime;
use PHPUnit\Framework\TestCase;

class DateToTest extends TestCase
{
    public function testConstructor()
    {
        $dateTime = new DateTime('2017-11-23T10:00:00+01:00');
        $dateTo = new DateTo($dateTime);

        $key = $dateTo->getKey();
        $value = $dateTo->getValue();

        $this->assertEquals('dateTo', $key);
        $this->assertEquals('2017-11-23T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithAtomString()
    {
        $dateTime = '2017-11-23T10:00:00+01:00';
        $dateTo = DateTo::createFromAtomString($dateTime);

        $key = $dateTo->getKey();
        $value = $dateTo->getValue();

        $this->assertEquals('dateTo', $key);
        $this->assertEquals('2017-11-23T10:00:00+01:00', $value);
    }

    public function testWithWildcard()
    {
        $id = DateTo::wildcard();

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('dateTo', $key);
        $this->assertEquals('*', $value);
    }
}
