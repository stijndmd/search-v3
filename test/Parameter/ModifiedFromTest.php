<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\ModifiedFrom;
use DateTime;

class ModifiedFromTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = '2017-12-21T10:00:00+01:00';
        $modifiedFrom = new ModifiedFrom($dateTime);

        $key = $modifiedFrom->getKey();
        $value = $modifiedFrom->getValue();

        $this->assertEquals('modifiedFrom', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithDateTime()
    {
        $dateTime = new DateTime('2017-12-21T10:00:00+01:00');
        $modifiedFrom = ModifiedFrom::createFromDateTime($dateTime);

        $key = $modifiedFrom->getKey();
        $value = $modifiedFrom->getValue();

        $this->assertEquals('modifiedFrom', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testConstructorWithWildcard()
    {
        $wildCard = '*';
        $id = new ModifiedFrom($wildCard);

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('modifiedFrom', $key);
        $this->assertEquals('*', $value);
    }
}
