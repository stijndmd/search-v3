<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class CreatorTest extends TestCase
{
    public function testConstructor(): void
    {
        $creator = new Creator('meneer Oerschaffel');

        $key = $creator->getKey();
        $value = $creator->getValue();

        self::assertEquals('creator', $key);
        self::assertEquals('meneer Oerschaffel', $value);
    }
}
