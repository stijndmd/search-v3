<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class FacetResultItemTest extends TestCase
{
    /**
     * @var FacetResultItem
     */
    protected $facetResultItem;

    public function setUp(): void
    {
        $value = 'facetResultItemValue';
        $names = new TranslatedString(array('name1', 'name2'));
        $count = 2;
        $children = array('child1', 'child2');
        $this->facetResultItem = new FacetResultItem($value, $names, $count, $children);
    }

    public function testGetValueMethod(): void
    {
        $this->facetResultItem->setValue('new facetResultItemValue');

        $result = $this->facetResultItem->getValue();
        self::assertEquals('new facetResultItemValue', $result);
    }

    public function testGetNamesMethod(): void
    {
        $names = new TranslatedString(array('new name1', 'new name2'));
        $this->facetResultItem->setName($names);

        self::assertEquals($names, $this->facetResultItem->getName());
    }

    public function testGetCountMethod(): void
    {
        $this->facetResultItem->setCount(3);

        $result = $this->facetResultItem->getCount();
        self::assertEquals(3, $result);
    }

    public function testGetChildrenMethod(): void
    {
        $this->facetResultItem->setChildren(array('new child1', 'new child2'));

        $result = $this->facetResultItem->getChildren();
        self::assertEquals(array('new child1', 'new child2'), $result);
    }
}
