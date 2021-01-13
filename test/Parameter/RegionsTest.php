<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class RegionsTest extends TestCase
{
    public function testConstructor()
    {
        $region = new Regions('prv-antwerpen');

        $key = $region->getKey();
        $value = $region->getValue();

        $this->assertEquals($key, 'regions');
        $this->assertEquals($value, 'prv-antwerpen');
    }
}
