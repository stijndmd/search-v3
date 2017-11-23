<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Collection
     */
    protected $collection;

    public function setUp()
    {
        $this->collection = new Collection();
    }

    public function testGetItemsMethod()
    {
        $items = array('item1', 'item2', 'item3');
        $this->collection->setItems($items);

        $result = $this->collection->getItems();
        $this->assertEquals($items, $result);
    }
}
