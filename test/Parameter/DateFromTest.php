<?php

namespace CultuurNet\SearchV3\Parameter;

use DateTime;
use PHPUnit\Framework\TestCase;

class DateFromTest extends TestCase
{
    public function testConstructor()
    {
        $dateTime = new DateTime('2017-12-21T10:00:00+01:00');
        $dateFrom = new DateFrom($dateTime);

        $key = $dateFrom->getKey();
        $value = $dateFrom->getValue();

        $this->assertEquals('dateFrom', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithAtomString()
    {
        $dateTime = '2017-12-21T10:00:00+01:00';
        $dateFrom = DateFrom::createFromAtomString($dateTime);

        $key = $dateFrom->getKey();
        $value = $dateFrom->getValue();

        $this->assertEquals('dateFrom', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testWithWildcard()
    {
        $id = DateFrom::wildcard();

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('dateFrom', $key);
        $this->assertEquals('*', $value);
    }
}
