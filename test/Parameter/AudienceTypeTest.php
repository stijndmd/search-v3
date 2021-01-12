<?php

namespace CultuurNet\SearchV3\Parameter;

class AudienceTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $audienceType = new AudienceType(AudienceType::AUDIENCE_EVERYONE);

        $key = $audienceType->getKey();
        $value = $audienceType->getValue();

        $this->assertEquals($key, 'audienceType');
        $this->assertEquals($value, 'everyone');
    }
}
