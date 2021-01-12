<?php

namespace CultuurNet\SearchV3\Parameter;

class RegionsTest extends \PHPUnit_Framework_TestCase
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
