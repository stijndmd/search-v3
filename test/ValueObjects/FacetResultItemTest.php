<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\FacetResultItem;

class FacetResultItemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FacetResultItem
     */
    protected $facetResultItem;

    public function setUp()
    {
        $value = 'facetResultItemValue';
        $names = array('name1', 'name2');
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
        $this->facetResultItem->setNames(array('new name1', 'new name2'));

        $result = $this->facetResultItem->getNames();
        $this->assertEquals(array('new name1', 'new name2'), $result);
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
