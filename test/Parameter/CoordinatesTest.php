<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\Coordinates;

class CoordinatesTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $coordinates = new Coordinates('50.8511740', '4.3386740');

        $key = $coordinates->getKey();
        $value = $coordinates->getValue();

        $this->assertEquals($key, 'coordinates');
        $this->assertEquals($value, '50.8511740,4.3386740');
    }
}
