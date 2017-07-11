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

}