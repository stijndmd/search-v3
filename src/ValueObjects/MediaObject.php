<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

final class MediaObject
{
    /**
     * @var string|null
     * @Type("string")
     */
    protected $id;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $contentUrl;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $thumbnailUrl;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $description;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $copyrightHolder;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getCopyrightHolder(): string
    {
        return $this->copyrightHolder;
    }

    public function setCopyrightHolder(string $copyrightHolder): self
    {
        $this->copyrightHolder = $copyrightHolder;
        return $this;
    }
}
