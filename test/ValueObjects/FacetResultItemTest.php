<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class FacetResultItemTest extends TestCase
{
    /**
     * @var FacetResultItem
     */
    protected $facetResultItem;

    public function setUp()
    {
        $value = 'facetResultItemValue';
        $names = new TranslatedString(array('name1', 'name2'));
        $count = 2;
        $children = array('child1', 'child2');
        $this->facetResultItem = new FacetResultItem($value, $names, $count, $children);
    }

    public function testGetValueMethod()
    {
        $this->facetResultItem->setValue('new facetResultItemValue');

        $result = $this->facetResultItem->getValue();
        $this->assertEquals('new facetResultItemValue', $result);
    }

    public function testGetNamesMethod()
    {
        $names = new TranslatedString(array('new name1', 'new name2'));
        $this->facetResultItem->setName($names);

        $this->assertEquals($names, $this->facetResultItem->getName());
    }

    public function testGetCountMethod()
    {
        $this->facetResultItem->setCount(3);

        $result = $this->facetResultItem->getCount();
        $this->assertEquals(3, $result);
    }

    public function testGetChildrenMethod()
    {
        $this->facetResultItem->setChildren(array('new child1', 'new child2'));

        $result = $this->facetResultItem->getChildren();
        $this->assertEquals(array('new child1', 'new child2'), $result);
    }
}
