<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class QueryTest extends TestCase
{
    public function testConstructor(): void
    {
        $query = new Query('this-is-a-random-query');

        $key = $query->getKey();
        $value = $query->getValue();

        self::assertEquals($key, 'q');
        self::assertEquals($value, 'this-is-a-random-query');
    }
}
