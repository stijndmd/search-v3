<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class MaxAgeTest extends TestCase
{
    public function testConstructor(): void
    {
        $id = new MaxAge('16');

        $key = $id->getKey();
        $value = $id->getValue();

        self::assertEquals($key, 'maxAge');
        self::assertEquals($value, '16');
    }
}
