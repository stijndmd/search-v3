<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\Parameter;

use PHPUnit\Framework\TestCase;

class MediaObjectTest extends TestCase
{
    public function testConstructor(): void
    {
        $mediaObject = new MediaObject(true);

        $key = $mediaObject->getKey();
        $value = $mediaObject->getValue();

        $this->assertEquals('hasMediaObject', $key);
        $this->assertTrue($value);
    }
}
