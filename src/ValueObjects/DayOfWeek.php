<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

/**
 * DayOfWeek class.
 */
class DayOfWeek
{

    /**
     * @var array
     * @Type("array<string>")
     */
    protected $days;

    /**
     * @return array
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param array $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }

}
