<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\PostalCode;

class PostalCodeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $query = new PostalCode('3000');

        $key = $query->getKey();
        $value = $query->getValue();

        $this->assertEquals($key, 'postalCode');
        $this->assertEquals($value, '3000');
    }
}
