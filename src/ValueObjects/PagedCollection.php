<?php

namespace CultuurNet\SearchV3\ValueObjects;

use CultuurNet\SearchV3\Hydrator\Event;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\HandlerCallback;
use JMS\Serializer\TypeParser;
use JMS\Serializer\Annotation\SerializedName;

class PagedCollection
{
    /**
     * Total items per page
     * @var int|null
     * @Type("integer")
     */
    protected $itemsPerPage;

    /**
     * Total items found.
     * @var int|null
     * @Type("integer")
     */
    protected $totalItems;

    /**
     * All members of this collection result.
     * @var Collection|null
     * @Type("CultuurNet\SearchV3\ValueObjects\Collection")
     */
    protected $member;

    /**
     * All facets for this paged collection.
     * @var FacetResults|null
     * @Type("CultuurNet\SearchV3\ValueObjects\FacetResults")
     * @SerializedName("facet")
     */
    protected $facets;

    public function getItemsPerPage(): ?int
    {
        return $this->itemsPerPage;
    }

    public function setItemsPerPage(int $itemsPerPage): self
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }

    public function getTotalItems(): ?int
    {
        return $this->totalItems;
    }

    public function setTotalItems(int $totalItems): self
    {
        $this->totalItems = $totalItems;
        return $this;
    }

    public function getMember(): ?Collection
    {
        return $this->member;
    }

    public function setMember(Collection $member): self
    {
        $this->member = $member;
        return $this;
    }

    public function getFacets(): ?FacetResults
    {
        return $this->facets;
    }

    public function setFacets(FacetResults $facets): self
    {
        $this->facets = $facets;
        return $this;
    }
}
