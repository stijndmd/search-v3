<?php

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class MediaObjectTest extends TestCase
{
    public function testConstructor(): void
    {
        $mediaObject = new MediaObject(true);

        $key = $mediaObject->getKey();
        $value = $mediaObject->getValue();

        self::assertEquals($key, 'hasMediaObject');
        self::assertTrue($value);
    }
}
