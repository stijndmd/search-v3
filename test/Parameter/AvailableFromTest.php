<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\AvailableFrom;
use DateTime;

class AvailableFromTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = '2017-04-11T12:08:01+01:00';
        $availableFrom = new AvailableFrom($dateTime);

        $key = $availableFrom->getKey();
        $value = $availableFrom->getValue();

        $this->assertEquals('availableFrom', $key);
        $this->assertEquals('2017-04-11T12:08:01+01:00', $value);
    }

    public function testFactoryMethodWithDateTime()
    {
        $dateTime = new DateTime('2017-04-11T12:08:01+01:00');
        $availableFrom = AvailableFrom::createFromDateTime($dateTime);

        $key = $availableFrom->getKey();
        $value = $availableFrom->getValue();

        $this->assertEquals('availableFrom', $key);
        $this->assertEquals('2017-04-11T12:08:01+01:00', $value);
    }

    public function testConstructorWithWildcard()
    {
        $wildCard = '*';
        $id = new AvailableFrom($wildCard);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('availableFrom', $key);
        $this->assertEquals('*', $value);
    }
}
