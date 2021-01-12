<?php

namespace CultuurNet\SearchV3\Parameter;

class MediaObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $mediaObject = new MediaObject(true);

        $key = $mediaObject->getKey();
        $value = $mediaObject->getValue();

        $this->assertEquals($key, 'hasMediaObject');
        $this->assertTrue($value);
    }
}
