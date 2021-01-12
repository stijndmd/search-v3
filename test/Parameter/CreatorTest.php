<?php

namespace CultuurNet\SearchV3\Parameter;

class CreatorTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $creator = new Creator('meneer Oerschaffel');

        $key = $creator->getKey();
        $value = $creator->getValue();

        $this->assertEquals($key, 'creator');
        $this->assertEquals($value, 'meneer Oerschaffel');
    }
}
