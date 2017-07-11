<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\TypeParser;

/**
 * Represents the facets on a search result.
 */
class FacetResultItem
{

    /**
     * The value of the facet item.
     *
     * @var string
     */
    protected $value;

    /**
     * Array of names per language.
     *
     * @var array
     */
    protected $names;

    /**
     * Total results for this item.
     *
     * @var int
     */
    protected $count;

    /**
     * Child facet results
     *
     * @var array
     */
    protected $children;

    /**
     * FacetResultItem constructor.
     * @param $value
     * @param $names
     * @param $count
     * @param $children
     */
    public function __construct($value, $names, $count, $children)
    {
        $this->value = $value;
        $this->names = $names;
        $this->count = $count;
        $this->children = $children;
    }

}