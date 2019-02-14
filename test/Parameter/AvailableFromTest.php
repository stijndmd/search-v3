<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\AvailableFrom;

class AvailableFromTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = new \DateTime('2017-04-11T12:08:01+01:00');
        $id = new AvailableFrom($dateTime);

        $key = $id->getKey();
        $value = $id->getValue();

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
