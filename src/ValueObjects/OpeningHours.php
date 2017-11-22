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

}
