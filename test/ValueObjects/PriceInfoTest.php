<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class PriceInfoTest extends TestCase
{
    /**
     * @var PriceInfo
     */
    protected $priceInfo;

    public function setUp(): void
    {
        $this->priceInfo = new priceInfo();
    }

    public function testGetCategoryMethod(): void
    {
        $this->priceInfo->setCategory('base');

        $result = $this->priceInfo->getCategory();
        self::assertEquals('base', $result);
    }

    public function testGetNameMethod(): void
    {
        $priceName = new TranslatedString(['nl' => 'Senioren']);
        $this->priceInfo->setName($priceName);

        $result = $this->priceInfo->getName();
        self::assertInstanceOf('CultuurNet\SearchV3\ValueObjects\TranslatedString', $result);
        self::assertEquals($priceName, $result);
    }

    public function testGetPriceCurrency(): void
    {
        $this->priceInfo->setPriceCurrency('euro');

        $result = $this->priceInfo->getPriceCurrency();
        self::assertEquals('euro', $result);
    }

    public function testGetPriceMethod(): void
    {
        $this->priceInfo->setPrice(23.45);

        $result = $this->priceInfo->getPrice();
        self::assertEquals(23.45, $result);
    }
}
