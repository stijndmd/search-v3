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
     * @Type("array<CultuurNet\SearchV3\ValueObjects\DayOfWeek>")
     */
    protected $daysOfWeek;

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
        return $this->daysOfWeek;
    }

    /**
     * @param mixed $daysOfWeek
     */
    public function setDaysOfWeek($daysOfWeek)
    {
        $this->daysOfWeek = $daysOfWeek;
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
