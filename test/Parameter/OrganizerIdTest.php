<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class OrganizerIdTest extends TestCase
{
    public function testConstructor(): void
    {
        $id = new OrganizerId('7d1f485d-dab5-4ad2-8894-322060a2bc52');

        $key = $id->getKey();
        $value = $id->getValue();

        self::assertEquals($key, 'organizerId');
        self::assertEquals($value, '7d1f485d-dab5-4ad2-8894-322060a2bc52');
    }
}
