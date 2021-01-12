<?php

namespace CultuurNet\SearchV3\ValueObjects;

final class FacetResultItem
{
    /**
     * The value of the facet item.
     *
     * @var string
     */
    private $value;

    /**
     * The name of this facet result.
     *
     * @var TranslatedString
     */
    private $name;

    /**
     * Total results for this item.
     *
     * @var int
     */
    private $count;

    /**
     * Child facet results
     *
     * @var array
     */
    private $children;

    public function __construct(string $value, TranslatedString $name, int $count, array $children = [])
    {
        $this->value = $value;
        $this->name = $name;
        $this->count = $count;
        $this->children = $children;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function getName(): TranslatedString
    {
        return $this->name;
    }

    public function setName(TranslatedString $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function setChildren(array $children): self
    {
        $this->children = $children;
        return $this;
    }
}
