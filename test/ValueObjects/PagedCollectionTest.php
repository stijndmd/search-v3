<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use CultuurNet\SearchV3\ValueObjects\Collection;
use CultuurNet\SearchV3\ValueObjects\FacetResults;

class PagedCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PagedCollection
     */
    protected $pagedCollection;

    public function setUp()
    {
        $this->pagedCollection = new PagedCollection();

        $mockCollection = new Collection();
        $mockFacetResults = new FacetResults();

        $this->pagedCollection->setItemsPerPage(10);
        $this->pagedCollection->setTotalItems(120);
        $this->pagedCollection->setMember($mockCollection);
        $this->pagedCollection->setFacets($mockFacetResults);
    }

    public function testGetItemsPerPageMethod()
    {
        $result = $this->pagedCollection->getItemsPerPage();
        $this->assertEquals(10, $result);
    }

    public function testGetTotalItems()
    {
        $result = $this->pagedCollection->getTotalItems();
        $this->assertEquals(120, $result);
    }

    public function testGetMemberMethod()
    {
        $result = $this->pagedCollection->getMember();
        $this->assertInstanceOf(Collection::class, $result);
    }

    public function testGetFacets()
    {
        $result = $this->pagedCollection->getFacets();
        $this->assertInstanceOf(FacetResults::class, $result);
    }
}
