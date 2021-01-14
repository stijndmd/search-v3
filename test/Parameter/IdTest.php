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

        self::assertEquals($key, 'id');
        self::assertEquals($value, 'this-is-an-id');
    }
}
