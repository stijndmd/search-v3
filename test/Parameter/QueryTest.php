<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\Query;

class QueryTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $query = new Query('this-is-a-random-query');

        $key = $query->getKey();
        $value = $query->getValue();

        $this->assertEquals($key, 'q');
        $this->assertEquals($value, 'this-is-a-random-query');
    }
}