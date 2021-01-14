<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class MinPriceTest extends TestCase
{
    public function testConstructor(): void
    {
        $price = new minPrice(9.99);

        $key = $price->getKey();
        $value = $price->getValue();

        self::assertEquals($key, 'minPrice');
        self::assertEquals($value, 9.99);
    }
}
