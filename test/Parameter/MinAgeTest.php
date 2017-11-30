<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\MinAge;

class MinAgeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $id = new MinAge('12');

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals($key, 'minAge');
        $this->assertEquals($value, '12');
    }
}
