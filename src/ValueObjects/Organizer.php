<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Organizer
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("@id")
     */
    private $id;

    /**
     * @var TranslatedString|null
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedString")
     */
    private $name;

    /**
     * @var string[]
     * @Type("array<string>")
     */
    private $email = [];

    /**
     * @var ContactPoint|null
     * @Type("CultuurNet\SearchV3\ValueObjects\ContactPoint")
     */
    private $contactPoint;

    /**
     * @var string[]
     * @Type("array<string>")
     */
    private $hiddenLabels = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getCdbid(): ?string
    {
        if (is_null($this->id)) {
            return null;
        }

        $id_parts = explode('/', rtrim($this->id, '/'));
        return end($id_parts);
    }

    public function getName(): ?TranslatedString
    {
        return $this->name;
    }

    public function setName(TranslatedString $name): ?Organizer
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): array
    {
        return $this->email;
    }

    public function setEmail(array $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getContactPoint(): ?ContactPoint
    {
        return $this->contactPoint;
    }

    public function setContactPoint(ContactPoint $contactPoint): self
    {
        $this->contactPoint = $contactPoint;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getHiddenLabels(): array
    {
        return $this->hiddenLabels;
    }

    /**
     * @param string[] $hiddenLabels
     * @return self
     */
    public function setHiddenLabels(array $hiddenLabels): self
    {
        $this->hiddenLabels = $hiddenLabels;
        return $this;
    }
}
