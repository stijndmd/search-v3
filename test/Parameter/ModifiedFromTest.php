<?php

namespace CultuurNet\SearchV3\Parameter;

use DateTime;
use PHPUnit\Framework\TestCase;

class ModifiedFromTest extends TestCase
{
    public function testConstructor()
    {
        $dateTime = new DateTime('2017-12-21T10:00:00+01:00');
        $modifiedFrom = new ModifiedFrom($dateTime);

        $key = $modifiedFrom->getKey();
        $value = $modifiedFrom->getValue();

        $this->assertEquals('modifiedFrom', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithAtomString()
    {
        $dateTime = '2017-12-21T10:00:00+01:00';
        $modifiedFrom = ModifiedFrom::createFromAtomString($dateTime);

        $key = $modifiedFrom->getKey();
        $value = $modifiedFrom->getValue();

        $this->assertEquals('modifiedFrom', $key);
        $this->assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testWithWildcard()
    {
        $id = ModifiedFrom::createWithWildcardValue();

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals('modifiedFrom', $key);
        $this->assertEquals('*', $value);
    }
}
