<?php

namespace CultuurNet\SearchV3\Parameter\Test;

use CultuurNet\SearchV3\Parameter\MediaObject;

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
