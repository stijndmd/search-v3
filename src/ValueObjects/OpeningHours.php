<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

/**
 * OpeningHours class.
 */
class OpeningHours
{

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $dayOfWeek = [];

    /**
     * @var string
     * @Type("string")
     */
    protected $opens;

    /**
     * @var string
     * @Type("string")
     */
    protected $closes;

    /**
     * @return mixed
     */
    public function getDaysOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param mixed $dayOfWeek
     */
    public function setDaysOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    /**
     * @return string
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param string $opens
     */
    public function setOpens($opens)
    {
        $this->opens = $opens;
    }

    /**
     * @return string
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * @param string $closes
     */
    public function setCloses($closes)
    {
        $this->closes = $closes;
    }
}
