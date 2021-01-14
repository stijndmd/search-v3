<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    public function testConstructor(): void
    {
        $price = new Price(5.46);

        $key = $price->getKey();
        $value = $price->getValue();

        self::assertEquals('price', $key);
        self::assertEquals(5.46, $value);
    }
}
