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
     * @return string
     */
    public function getField() {
        return $this->field;
    }

    /**
     * @param string $field
     * @return FacetResult
     */
    public function setField($field) {
        $this->field = $field;

        return $this;
    }

    /**
     * @return FacetResultItem[]
     */
    public function getResults() {
        return $this->results;
    }

    /**
     * @param FacetResultItem[] $results
     * @return FacetResult
     */
    public function setResults($results) {
        $this->results = $results;

        return $this;
    }

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