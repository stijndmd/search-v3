<?php

namespace CultuurNet\SearchV3\Parameter;

use DateTime;

class CreatedToTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = '2017-12-21T10:00:00+01:00';
        $createdTo = new CreatedTo($dateTime);

        $key = $createdTo->getKey();
        $value = $createdTo->getValue();

        $this->assertEquals('createdTo', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithDateTime()
    {
        $dateTime = new DateTime('21-12-2017T10:00:00+01:00');
        $createdTo = CreatedTo::createFromDateTime($dateTime);

        $key = $createdTo->getKey();
        $value = $createdTo->getValue();

        $this->assertEquals('createdTo', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testConstructorWithWildcard()
    {
        $wildCard = '*';
        $id = new CreatedTo($wildCard);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('createdTo', $key);
        $this->assertEquals('*', $value);
    }
}
