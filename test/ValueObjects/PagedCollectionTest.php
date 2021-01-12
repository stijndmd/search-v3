<?php

namespace CultuurNet\SearchV3\ValueObjects;

class PagedCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PagedCollection
     */
    protected $pagedCollection;

    public function setUp()
    {
        $this->pagedCollection = new PagedCollection();
    }

    public function testGetItemsPerPageMethod()
    {
        $this->pagedCollection->setItemsPerPage(10);

        $result = $this->pagedCollection->getItemsPerPage();
        $this->assertEquals(10, $result);
    }

    public function testGetTotalItems()
    {
        $this->pagedCollection->setTotalItems(120);

        $result = $this->pagedCollection->getTotalItems();
        $this->assertEquals(120, $result);
    }

    public function testGetMemberMethod()
    {
        $mockCollection = new Collection();
        $this->pagedCollection->setMember($mockCollection);

        $result = $this->pagedCollection->getMember();
        $this->assertInstanceOf(Collection::class, $result);
    }

    public function testGetFacets()
    {
        $mockFacetResults = new FacetResults();
        $this->pagedCollection->setFacets($mockFacetResults);

        $result = $this->pagedCollection->getFacets();
        $this->assertInstanceOf(FacetResults::class, $result);
    }
}
