<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\PriceInfo;

class PriceInfoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PriceInfo
     */
    protected $priceInfo;

    public function setUp()
    {
        $this->priceInfo = new priceInfo();
    }

    public function testGetNameMethod()
    {
        $this->priceInfo->setName('test priceInfo');

        $result = $this->priceInfo->getName();
        $this->assertEquals('test priceInfo', $result);
    }

    public function testGetPriceCurrency()
    {
        $this->priceInfo->setPriceCurrency('euro');

        $result = $this->priceInfo->getPriceCurrency();
        $this->assertEquals('euro', $result);
    }

    public function testGetPriceMethod()
    {
        $this->priceInfo->setPrice(23.45);

        $result = $this->priceInfo->getPrice();
        $this->assertEquals(23.45, $result);
    }
}
