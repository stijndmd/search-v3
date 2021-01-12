<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

/**
 * OpeningHours class.
 */
class OpeningHours
{
    /**
     * @var string[]
     * @Type("array<string>")
     */
    protected $dayOfWeek = [];

    /**
     * @var string|null
     * @Type("string")
     */
    protected $opens;

    /**
     * @var string|null
     * @Type("string")
     */
    protected $closes;

    /**
     * @return string[]
     */
    public function getDaysOfWeek(): array
    {
        return $this->dayOfWeek;
    }

    /**
     * @param string[] $dayOfWeek
     */
    public function setDaysOfWeek(array $dayOfWeek): void
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    public function getOpens(): ?string
    {
        return $this->opens;
    }

    public function setOpens(string $opens): void
    {
        $this->opens = $opens;
    }

    public function getCloses(): ?string
    {
        return $this->closes;
    }

    public function setCloses(string $closes): void
    {
        $this->closes = $closes;
    }
}
