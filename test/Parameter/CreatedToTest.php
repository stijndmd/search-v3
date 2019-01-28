<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\CreatedTo;

class CreatedToTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $dateTime = new \DateTime('21-12-2017T10:00:00+01:00');
        $id = new CreatedTo($dateTime);

        $key = $id->getKey();
        $value = $id->getValue();

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
