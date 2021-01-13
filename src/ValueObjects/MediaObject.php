<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class MediaObject
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("@id")
     */
    private $id;

    /**
     * @var string|null
     * @Type("string")
     */
    private $contentUrl;

    /**
     * @var string|null
     * @Type("string")
     */
    private $thumbnailUrl;

    /**
     * @var string|null
     * @Type("string")
     */
    private $description;

    /**
     * @var string|null
     * @Type("string")
     */
    private $copyrightHolder;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(string $contentUrl): void
    {
        $this->contentUrl = $contentUrl;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl(string $thumbnailUrl): void
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCopyrightHolder(): string
    {
        return $this->copyrightHolder;
    }

    public function setCopyrightHolder(string $copyrightHolder): void
    {
        $this->copyrightHolder = $copyrightHolder;
    }
}
