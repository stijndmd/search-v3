<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\MaxPrice;

class MaxPriceTest extends \PHPUnit_Framework_TestCase
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
