<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class MaxPriceTest extends TestCase
{
    public function testConstructor(): void
    {
        $price = new maxPrice(19.99);

        $key = $price->getKey();
        $value = $price->getValue();

        self::assertEquals($key, 'maxPrice');
        self::assertEquals($value, 19.99);
    }
}
