<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\FacetResult;

class FacetResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FacetResult
     */
    protected $facetResult;

    public function setUp()
    {
        $field = 'facet result field';
        $results = $this->getMockBuilder('\FacetResultItem')
            ->getMock();
        $this->facetResult = new FacetResult($field, $results);
    }

    public function testGetFieldMethod()
    {
        $this->facetResult->setField('new facet result field');

        $result = $this->facetResult->getField();
        $this->assertEquals('new facet result field', $result);
    }

    public function testGetResultsMethod()
    {
        $newResults = $this->getMockBuilder('\FacetResultItem')
            ->getMock();
        $this->facetResult->setResults($newResults);

        $result = $this->facetResult->getResults();
        $this->assertEquals($newResults, $result);
    }
}
