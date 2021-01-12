<?php

namespace CultuurNet\SearchV3\Parameter;

class MinPriceTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $price = new minPrice(9.99);

        $key = $price->getKey();
        $value = $price->getValue();

        $this->assertEquals($key, 'minPrice');
        $this->assertEquals($value, 9.99);
    }
}
