<?php

namespace CultuurNet\SearchV3\ValueObjects;

class FacetResult
{
    /**
     * Field where facets are based on.
     * @var string
     */
    protected $field;

    /**
     * @var FacetResultItem[]
     */
    protected $results = [];

    /**
     * @param string $field
     * @param FacetResultItem[] $results
     */
    public function __construct(string $field, array $results)
    {
        $this->field = $field;
        $this->results = $results;
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function setField(string $field): self
    {
        $this->field = $field;
        return $this;
    }

    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param FacetResultItem[] $results
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->results = $results;
        return $this;
    }
}
