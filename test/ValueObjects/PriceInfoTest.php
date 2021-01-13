<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class PriceInfoTest extends TestCase
{
    /**
     * @var PriceInfo
     */
    protected $priceInfo;

    public function setUp()
    {
        $this->priceInfo = new priceInfo();
    }

    public function testGetCategoryMethod()
    {
        $this->priceInfo->setCategory('base');

        $result = $this->priceInfo->getCategory();
        $this->assertEquals('base', $result);
    }

    public function testGetNameMethod()
    {
        $priceName = new TranslatedString(['nl' => 'Senioren']);
        $this->priceInfo->setName($priceName);

        $result = $this->priceInfo->getName();
        $this->assertInstanceOf('CultuurNet\SearchV3\ValueObjects\TranslatedString', $result);
        $this->assertEquals($priceName, $result);
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
