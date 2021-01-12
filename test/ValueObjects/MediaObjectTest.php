<?php

namespace CultuurNet\SearchV3\ValueObjects;

class MediaObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MediaObject
     */
    protected $mediaObject;

    public function setUp()
    {
        $this->mediaObject = new MediaObject();
    }

    public function testGetIdMethod()
    {
        $this->mediaObject->setId('mediaObject-id');

        $result = $this->mediaObject->getId();
        $this->assertEquals('mediaObject-id', $result);
    }

    public function testGetContentUrlMethod()
    {
        $this->mediaObject->setContentUrl('http://content-url.com');

        $result = $this->mediaObject->getContentUrl();
        $this->assertEquals('http://content-url.com', $result);
    }

    public function testGetThumbnailUrlMethod()
    {
        $this->mediaObject->setThumbnailUrl('http://thumbnail-url.com');

        $result = $this->mediaObject->getThumbnailUrl();
        $this->assertEquals('http://thumbnail-url.com', $result);
    }

    public function testGetDescriptionMethod()
    {
        $this->mediaObject->setDescription('this is a description');

        $result = $this->mediaObject->getDescription();
        $this->assertEquals('this is a description', $result);
    }

    public function testGetCopyrightHolderMethod()
    {
        $this->mediaObject->setCopyrightHolder('copyright holder');

        $result = $this->mediaObject->getCopyrightHolder();
        $this->assertEquals('copyright holder', $result);
    }
}
