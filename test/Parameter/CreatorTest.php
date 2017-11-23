<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\Creator;

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
