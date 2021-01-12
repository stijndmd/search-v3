<?php

namespace CultuurNet\SearchV3\Parameter;

class Facet extends AbstractParameter
{
    /**
     * Facet constructor.
     * @param $facetType
     *   Type of facets to request.
     */
    public function __construct($facetType)
    {
        $this->key = 'facets';
        $this->value = $facetType;
    }
}
