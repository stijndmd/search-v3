<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\Facet;

class FacetTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $facet = new Facet('regions');

        $key = $facet->getKey();
        $value = $facet->getValue();

        $this->assertEquals($key, 'facets');
        $this->assertEquals($value, 'regions');
    }
}
