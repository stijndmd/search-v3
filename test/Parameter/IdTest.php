<?php

namespace CultuurNet\SearchV3\Parameter;

class IdTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $id = new Id('this-is-an-id');

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals($key, 'id');
        $this->assertEquals($value, 'this-is-an-id');
    }
}
