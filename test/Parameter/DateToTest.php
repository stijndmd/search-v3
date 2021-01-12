<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\DateTo;
use DateTime;

class DateToTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = '2017-11-23T10:00:00+01:00';
        $dateTo = new DateTo($dateTime);

        $key = $dateTo->getKey();
        $value = $dateTo->getValue();

        $this->assertEquals('dateTo', $key);
        $this->assertEquals('2017-11-23T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithDateTime()
    {
        $dateTime = new DateTime('23-11-2017T10:00:00+01:00');
        $dateTo = DateTo::createFromDateTime($dateTime);

        $key = $dateTo->getKey();
        $value = $dateTo->getValue();

        $this->assertEquals('dateTo', $key);
        $this->assertEquals('2017-11-23T10:00:00+01:00', $value);
    }

    public function testConstructorWithWildcard()
    {
        $wildCard = '*';
        $id = new DateTo($wildCard);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('dateTo', $key);
        $this->assertEquals('*', $value);
    }
}
