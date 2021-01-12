<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

final class Performer
{
    /**
     * @var string|null
     * @Type("string")
     */
    protected $name;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $role;

    public function __construct(
        ?string $name = null
    ) {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }
}
