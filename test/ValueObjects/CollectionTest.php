<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /**
     * @var Collection
     */
    protected $collection;

    public function setUp(): void
    {
        $this->collection = new Collection();
    }

    public function testGetItemsMethod(): void
    {
        $items = array('item1', 'item2', 'item3');
        $this->collection->setItems($items);

        $result = $this->collection->getItems();
        self::assertEquals($items, $result);
    }
}
