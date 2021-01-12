<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

final class Audience
{
    /**
     * @var string|null
     * @Type("string")
     */
    protected $audienceType;

    public function __construct(
        ?string $audienceType = null
    ) {
        $this->audienceType = $audienceType;
    }

    public function getAudienceType(): ?string
    {
        return $this->audienceType;
    }

    public function setAudienceType(string $audienceType): self
    {
        $this->audienceType = $audienceType;
        return $this;
    }
}
