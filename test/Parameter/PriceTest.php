<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    public function testConstructor()
    {
        $price = new Price(5.46);

        $key = $price->getKey();
        $value = $price->getValue();

        $this->assertEquals($key, 'price');
        $this->assertEquals($value, 5.46);
    }
}
