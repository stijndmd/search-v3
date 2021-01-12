<?php

namespace CultuurNet\SearchV3\Parameter;

class Facet extends AbstractParameter
{
    public function __construct(string $facetType)
    {
        $this->key = 'facets';
        $this->value = $facetType;
    }

    public function allowsMultiple(): bool
    {
        return true;
    }
}
