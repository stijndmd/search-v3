<?php

namespace CultuurNet\SearchV3\Parameter;

use DateTime;
use PHPUnit\Framework\TestCase;

class ModifiedFromTest extends TestCase
{
    public function testConstructor(): void
    {
        $dateTime = new DateTime('2017-12-21T10:00:00+01:00');
        $modifiedFrom = new ModifiedFrom($dateTime);

        $key = $modifiedFrom->getKey();
        $value = $modifiedFrom->getValue();

        self::assertEquals('modifiedFrom', $key);
        self::assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testFactoryMethodWithAtomString(): void
    {
        $dateTime = '2017-12-21T10:00:00+01:00';
        $modifiedFrom = ModifiedFrom::createFromAtomString($dateTime);

        $key = $modifiedFrom->getKey();
        $value = $modifiedFrom->getValue();

        self::assertEquals('modifiedFrom', $key);
        self::assertEquals('2017-12-21T10:00:00+01:00', $value);
    }

    public function testWithWildcard(): void
    {
        $id = ModifiedFrom::wildcard();

        $key = $id->getKey();
        $value = $id->getValue();

        self::assertEquals('modifiedFrom', $key);
        self::assertEquals('*', $value);
    }
}
