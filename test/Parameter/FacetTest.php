<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class FacetTest extends TestCase
{
    public function testConstructor(): void
    {
        $facet = new Facet('regions');

        $key = $facet->getKey();
        $value = $facet->getValue();

        $this->assertEquals($key, 'facets');
        $this->assertEquals($value, 'regions');
    }
}
