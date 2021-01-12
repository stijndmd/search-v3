<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\ModifiedTo;
use DateTime;

class ModifiedToTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = '2017-12-21T10:00:00+01:00';
        $modifiedTo = new ModifiedTo($dateTime);

        $key = $modifiedTo->getKey();
        $value = $modifiedTo->getValue();

        $this->assertEquals('modifiedTo', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithModifiedTo()
    {
        $dateTime = new DateTime('21-12-2017T10:00:00+01:00');
        $modifiedTo = ModifiedTo::createFromDateTime($dateTime);

        $key = $modifiedTo->getKey();
        $value = $modifiedTo->getValue();

        $this->assertEquals('modifiedTo', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testConstructorWithWildcard()
    {
        $wildCard = '*';
        $id = new ModifiedTo($wildCard);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('modifiedTo', $key);
        $this->assertEquals('*', $value);
    }
}
