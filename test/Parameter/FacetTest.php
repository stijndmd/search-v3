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

        self::assertEquals($key, 'facets');
        self::assertEquals($value, 'regions');
    }
}
