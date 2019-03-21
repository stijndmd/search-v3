<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

/**
 * Value object for price information
 */
class PriceInfo
{
    /**
     * @var string
     * @Type("string")
     */
    protected $category;

    /**
     * @var TranslatedString
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     */
    protected $priceCurrency;

    /**
     * @var float
     * @Type("float")
     */
    protected $price;

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return PriceInfo
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return TranslatedString
     */
    public function getName()
    {
        return $this->name;
    }

   /**
    * @param TranslatedString $name
    * @return PriceInfo
    */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * @param string $priceCurrency
     * @return PriceInfo
     */
    public function setPriceCurrency($priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return PriceInfo
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}
