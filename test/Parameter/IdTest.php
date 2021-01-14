<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class IdTest extends TestCase
{
    public function testConstructor(): void
    {
        $id = new Id('this-is-an-id');

        $key = $id->getKey();
        $value = $id->getValue();

        self::assertEquals('id', $key);
        self::assertEquals('this-is-an-id', $value);
    }
}
