<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\HandlerCallback;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;

final class FacetResults implements \Iterator
{
    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var FacetResult[]
     */
    protected $facetResults = [];

    /**
     * @return FacetResult[]
     */
    public function getFacetResults(): array
    {
        return $this->facetResults;
    }

    /**
     * @param FacetResult[] $facetResults
     * @return self
     */
    public function setFacetResults(array $facetResults): self
    {
        $this->facetResults = $facetResults;
        return $this;
    }

    public function getFacetResultsByField($field): array
    {
        $results = [];
        foreach ($this->facetResults as $facetResult) {
            if ($facetResult->getField() == $field) {
                $results[] = $facetResult;
            }
        }
        return $results;
    }

    public function current()
    {
        return current($this->facetResults);
    }

    public function next(): void
    {
        next($this->facetResults);
    }

    public function key()
    {
        return key($this->facetResults);
    }

    public function valid(): bool
    {
        return key($this->facetResults) !== null;
    }

    public function rewind(): void
    {
        reset($this->facetResults);
    }

    /**
     * @HandlerCallback("json", direction = "deserialization")
     */
    public function deserializeFromJson(
        JsonDeserializationVisitor $visitor,
        array $values,
        DeserializationContext $context
    ): void {
        foreach ($values as $facet_type => $results) {
            $this->facetResults[$facet_type] = new FacetResult($facet_type, $this->deserializeResults($results));
        }
    }

    protected function deserializeResults($results): array
    {
        $items = [];
        foreach ($results as $value => $result) {
            $children = isset($result['children']) ? $this->deserializeResults($result['children']) : [];
            $items[] = new FacetResultItem($value, new TranslatedString($result['name']), $result['count'], $children);
        }
        return $items;
    }
}
