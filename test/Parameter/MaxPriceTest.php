<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class MaxPriceTest extends TestCase
{
    public function testConstructor()
    {
        $price = new maxPrice(19.99);

        $key = $price->getKey();
        $value = $price->getValue();

        $this->assertEquals($key, 'maxPrice');
        $this->assertEquals($value, 19.99);
    }
}
