<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class MediaObjectTest extends TestCase
{
    /**
     * @var MediaObject
     */
    protected $mediaObject;

    public function setUp(): void
    {
        $this->mediaObject = new MediaObject();
    }

    public function testGetIdMethod(): void
    {
        $this->mediaObject->setId('mediaObject-id');

        $result = $this->mediaObject->getId();
        self::assertEquals('mediaObject-id', $result);
    }

    public function testGetContentUrlMethod(): void
    {
        $this->mediaObject->setContentUrl('http://content-url.com');

        $result = $this->mediaObject->getContentUrl();
        self::assertEquals('http://content-url.com', $result);
    }

    public function testGetThumbnailUrlMethod(): void
    {
        $this->mediaObject->setThumbnailUrl('http://thumbnail-url.com');

        $result = $this->mediaObject->getThumbnailUrl();
        self::assertEquals('http://thumbnail-url.com', $result);
    }

    public function testGetDescriptionMethod(): void
    {
        $this->mediaObject->setDescription('this is a description');

        $result = $this->mediaObject->getDescription();
        self::assertEquals('this is a description', $result);
    }

    public function testGetCopyrightHolderMethod(): void
    {
        $this->mediaObject->setCopyrightHolder('copyright holder');

        $result = $this->mediaObject->getCopyrightHolder();
        self::assertEquals('copyright holder', $result);
    }
}
