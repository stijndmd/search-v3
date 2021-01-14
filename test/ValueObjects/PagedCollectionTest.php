<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class PagedCollectionTest extends TestCase
{
    /**
     * @var PagedCollection
     */
    protected $pagedCollection;

    public function setUp(): void
    {
        $this->pagedCollection = new PagedCollection();
    }

    public function testGetItemsPerPageMethod(): void
    {
        $this->pagedCollection->setItemsPerPage(10);

        $result = $this->pagedCollection->getItemsPerPage();
        self::assertEquals(10, $result);
    }

    public function testGetTotalItems(): void
    {
        $this->pagedCollection->setTotalItems(120);

        $result = $this->pagedCollection->getTotalItems();
        self::assertEquals(120, $result);
    }

    public function testGetMemberMethod(): void
    {
        $mockCollection = new Collection();
        $this->pagedCollection->setMember($mockCollection);

        $result = $this->pagedCollection->getMember();
        self::assertInstanceOf(Collection::class, $result);
    }

    public function testGetFacets(): void
    {
        $mockFacetResults = new FacetResults();
        $this->pagedCollection->setFacets($mockFacetResults);

        $result = $this->pagedCollection->getFacets();
        self::assertInstanceOf(FacetResults::class, $result);
    }
}
