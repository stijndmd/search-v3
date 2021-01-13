<?php

namespace CultuurNet\SearchV3;

use CultuurNet\SearchV3\Parameter\Facet;
use CultuurNet\SearchV3\Parameter\Id;
use CultuurNet\SearchV3\Parameter\Label;
use PHPUnit\Framework\TestCase;

class SearchQueryTest extends TestCase
{
    /**
     * @var SearchQuery
     */
    protected $searchQuery;

    /**
     * @var Label
     */
    protected $label;

    /**
     * @var Facet
     */
    protected $facet;

    /**
     * @var ParameterInterface[]
     */
    protected $parameters;

    /**
     * @var array
     */
    protected $sorting;

    public function setUp()
    {
        $this->searchQuery = new SearchQuery();

        $this->label = new Label('test-label');
        $this->facet = new Facet('regions');

        $this->sorting = array('title', 'asc');

        $this->searchQuery->addParameter($this->label);
        $this->searchQuery->addParameter($this->facet);

        $this->searchQuery->addSort($this->sorting[0], $this->sorting[1]);
        $this->searchQuery->setEmbed(true);
        $this->searchQuery->setStart(10);
        $this->searchQuery->setLimit(50);
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(SearchQuery::class, $this->searchQuery);
    }

    public function testAddParameterMethod()
    {
        $idParameter = new Id('this-is-a-fake-id');

        $expectedParameters = $this->searchQuery->getParameters();
        $expectedParameters[] = $idParameter;

        $this->searchQuery->addParameter($idParameter);

        $this->assertEquals($expectedParameters, $this->searchQuery->getParameters());
    }

    public function testRemoveParametersMethod()
    {
        $expectedParameters = $this->searchQuery->getParameters();
        unset($expectedParameters[1]);

        $this->searchQuery->removeParameter($this->facet);

        $this->assertEquals($expectedParameters, $this->searchQuery->getParameters());
    }

    public function testGetParametersMethod()
    {
        $expectedParameters = $this->searchQuery->getParameters();
        $this->assertEquals($expectedParameters, $this->searchQuery->getParameters());
    }

    public function testAddSortMethod()
    {
        $expectedSortings = $this->searchQuery->getSort();
        $expectedSortings['availableTo'] = 'desc';

        $this->searchQuery->addSort('availableTo', 'desc');

        $this->assertEquals($expectedSortings, $this->searchQuery->getSort());
    }

    public function testRemoveSortMethod()
    {
        $expectedSortings = [];
        $this->searchQuery->removeSort('title');

        $this->assertEquals($expectedSortings, $this->searchQuery->getSort());
    }

    public function testGetSortMethod()
    {
        $expectedSortings = $this->searchQuery->getSort();
        $this->assertEquals($expectedSortings, $this->searchQuery->getSort());
    }

    public function testToArrayMethod()
    {
        $expectedQuery = array(
            'sort' => array(
                'title' => 'asc'
            ),
            'embed' => true,
            'start' => 10,
            'limit' => 50,
            'labels' => 'test-label',
            'facets' => 'regions'
        );

        $result = $this->searchQuery->toArray();

        $this->assertEquals($expectedQuery, $result);
    }

    public function testToArrayMethodWithDuplicateParameterKeys()
    {
        $this->searchQuery->addParameter(new Label('test-label2'));

        $expectedQuery = array(
            'sort' => array(
                'title' => 'asc'
            ),
            'embed' => true,
            'start' => 10,
            'limit' => 50,
            'labels' => array(
              'test-label',
              'test-label2',
            ),
            'facets' => 'regions'
        );

        $result = $this->searchQuery->toArray();

        $this->assertEquals($expectedQuery, $result);
    }

    public function testToArrayMethodWithDuplicateFacetKeys()
    {
        $this->searchQuery->addParameter(new Facet('types'));

        $expectedQuery = array(
            'sort' => array(
                'title' => 'asc'
            ),
            'embed' => true,
            'start' => 10,
            'limit' => 50,
            'labels' => 'test-label',
            'facets' => array(
                'regions',
                'types'
            )
        );

        $result = $this->searchQuery->toArray();

        $this->assertEquals($expectedQuery, $result);
    }

    public function testToStringMethod()
    {
        $expectedQueryString = 'labels=test-label&facets=regions&sort[title]=asc&embed=1&start=10&limit=50';
        $result = $this->searchQuery->__toString();

        $this->assertEquals($result, $expectedQueryString);
    }
}
