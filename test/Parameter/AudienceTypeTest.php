<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class AudienceTypeTest extends TestCase
{
    public function testConstructor(): void
    {
        $audienceType = new AudienceType(AudienceType::AUDIENCE_EVERYONE);

        $key = $audienceType->getKey();
        $value = $audienceType->getValue();

        $this->assertEquals($key, 'audienceType');
        $this->assertEquals($value, 'everyone');
    }
}
