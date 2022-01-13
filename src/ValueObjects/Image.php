<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

final class Image
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@id")
     */
    private $id;

    /**
     * @var string
     * @Type("string")
     */
    private $language;

    /**
     * @var string
     * @Type("string")
     */
    private $contentUrl;

    /**
     * @var string
     * @Type("string")
     */
    private $thumbnailUrl;

    /**
     * @var string|null
     * @Type("string")
     */
    private $copyrightHolder;

    /**
     * @var string|null
     * @Type("string")
     */
    private $description;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getContentUrl(): string
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

    public function getCopyrightHolder(): ?string
    {
        return $this->copyrightHolder;
    }

    public function setCopyrightHolder(?string $copyrightHolder): void
    {
        $this->copyrightHolder = $copyrightHolder;
    }

    public function getDescription(): ?string
    {
      return $this->description;
    }

    public function setDescription(?string $description): void
    {
      $this->description = $description;
    }
}
