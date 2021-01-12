<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Term
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
    protected $label;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $domain;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }
}
