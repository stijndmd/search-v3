<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class MaxPriceTest extends TestCase
{
    public function testConstructor(): void
    {
        $price = new maxPrice(19.99);

        $key = $price->getKey();
        $value = $price->getValue();

        $this->assertEquals('maxPrice', $key);
        $this->assertEquals(19.99, $value);
    }
}
