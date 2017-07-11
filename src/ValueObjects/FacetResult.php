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
     * All results for this facet.
     * @var FacetResultItem[]
     */
    protected $results;

    /**
     * FacetResult constructor.
     * @param $field
     * @param $results
     */
    public function __construct($field, $results)
    {
        $this->field = $field;
        $this->results = $results;
    }

}