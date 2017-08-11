<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class MediaObject
{

    /**
     * @var string
     * @Type("string")
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     */
    protected $contentUrl;

    /**
     * @var string
     * @Type("string")
     */
    protected $thumbnailUrl;

    /**
     * @var string
     * @Type("string")
     */
    protected $description;

    /**
     * @var string
     * @Type("string")
     */
    protected $copyrightHolder;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     * @return MediaObject
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentUrl() {
        return $this->contentUrl;
    }

    /**
     * @param string $contentUrl
     * @return MediaObject
     */
    public function setContentUrl($contentUrl) {
        $this->contentUrl = $contentUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl() {
        return $this->thumbnailUrl;
    }

    /**
     * @param string $thumbnailUrl
     * @return MediaObject
     */
    public function setThumbnailUrl($thumbnailUrl) {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     * @return MediaObject
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyrightHolder() {
        return $this->copyrightHolder;
    }

    /**
     * @param string $copyrightHolder
     * @return MediaObject
     */
    public function setCopyrightHolder($copyrightHolder) {
        $this->copyrightHolder = $copyrightHolder;

        return $this;
    }

}