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
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return FacetResultItem
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param array $names
     * @return FacetResultItem
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return FacetResultItem
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param array $children
     * @return FacetResultItem
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }

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
