<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class RegionsTest extends TestCase
{
    public function testConstructor(): void
    {
        $region = new Regions('prv-antwerpen');

        $key = $region->getKey();
        $value = $region->getValue();

        $this->assertEquals('regions', $key);
        $this->assertEquals('prv-antwerpen', $value);
    }
}
