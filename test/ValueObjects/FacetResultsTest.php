<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;

class FacetResultsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FacetResults
     */
    protected $facetResults;

    protected $facetJson;

    protected $visitor;

    protected $context;

    public function setUp()
    {
        $this->facetResults = new FacetResults();
        $this->facetJson = json_decode(file_get_contents(__DIR__ . '/data/facetResults.json'), true);
    }

    public function deserializeEverything()
    {
        $this->visitor = $this->getMockBuilder(JsonDeserializationVisitor::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->context = $this->getMockBuilder(DeserializationContext::class)
            ->getMock();

        $this->facetResults->deserializeFromJson($this->visitor, $this->facetJson, $this->context);
    }

    public function deserializeFacilitiesTestData($results)
    {
        $items = [];
        foreach ($results as $value => $result) {
            $children = isset($result['children']) ? $this->deserializeFacilitiesTestData($result['children']) : [];
            $items[] = new FacetResultItem($value, new TranslatedString($result['name']), $result['count'], $children);
        }

        return $items;
    }

    public function testGetFacetResultsMethod()
    {
        $this->facetResults->setFacetResults($this->facetJson);
        $result = $this->facetResults->getFacetResults();
        $this->assertEquals($result, $this->facetJson);
    }

    public function testGetFacetResultsByFieldMethod()
    {
        $this->deserializeEverything();

        $facilities = json_decode(file_get_contents(__DIR__ . '/data/facetResultsFacilities.json'), true);
        $facilitiesTestData[] = new FacetResult('facilities', $this->deserializeFacilitiesTestData($facilities));

        $result = $this->facetResults->getFacetResultsByField('facilities');

        $this->assertEquals($result, $facilitiesTestData);
    }

    public function testIteratorCurrentMethod()
    {
        $this->deserializeEverything();
        $this->facetResults->current();
    }

    public function testIteratorNextMethod()
    {
        $this->deserializeEverything();
        $this->facetResults->next();
    }

    public function testIteratorKeyMethod()
    {
        $this->deserializeEverything();
        $this->facetResults->key();
    }

    public function testIteratorValidMethod()
    {
        $this->deserializeEverything();
        $this->facetResults->valid();
    }

    public function testIteratorRewindMethod()
    {
        $this->deserializeEverything();
        $this->facetResults->rewind();
    }
}
