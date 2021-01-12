<?php

namespace CultuurNet\SearchV3\Parameter;

class OrganizerIdTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $id = new OrganizerId('7d1f485d-dab5-4ad2-8894-322060a2bc52');

        $key = $id->getKey();
        $value = $id->getValue();

        $this->assertEquals($key, 'organizerId');
        $this->assertEquals($value, '7d1f485d-dab5-4ad2-8894-322060a2bc52');
    }
}
