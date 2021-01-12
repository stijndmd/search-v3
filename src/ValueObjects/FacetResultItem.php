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
     * The name of this facet result.
     *
     * @var TranslatedString
     */
    protected $name;

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
     * @return TranslatedString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param TranslatedString $names
     * @return FacetResultItem
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @param TranslatedString $names
     * @param $count
     * @param $children
     */
    public function __construct($value, TranslatedString $name, $count, $children)
    {
        $this->value = $value;
        $this->name = $name;
        $this->count = $count;
        $this->children = $children;
    }
}
