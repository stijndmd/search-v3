<?php

namespace CultuurNet\SearchV3\ValueObjects;

use CultuurNet\SearchV3\Hydrator\Event;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\HandlerCallback;
use JMS\Serializer\TypeParser;
use JMS\Serializer\Annotation\SerializedName;

/**
 * PagedCollection class for a lists of items.
 */
class PagedCollection
{
    /**
     * Total items per page
     * @var int
     * @Type("integer")
     */
    protected $itemsPerPage;

    /**
     * Total items found.
     * @var int
     * @Type("integer")
     */
    protected $totalItems;

    /**
     * All members of this collection result.
     * @var Collection
     * @Type("CultuurNet\SearchV3\ValueObjects\Collection")
     */
    protected $member;

    /**
     * All facets for this paged collection.
     *
     * @Type("CultuurNet\SearchV3\ValueObjects\FacetResults")
     * @SerializedName("facet")
     */
    protected $facets;

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @param int $itemsPerPage
     * @return PagedCollection
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalItems()
    {
        return $this->totalItems;
    }

    /**
     * @param int $totalItems
     * @return PagedCollection
     */
    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param Collection $member
     * @return PagedCollection
     */
    public function setMember($member)
    {
        $this->member = $member;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * @param mixed $facets
     * @return PagedCollection
     */
    public function setFacets($facets)
    {
        $this->facets = $facets;
        return $this;
    }
}
