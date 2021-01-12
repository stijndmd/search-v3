<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on calendar type.
 */
class CalendarType extends AbstractParameter
{
    const TYPE_SINGLE = 'single';
    const TYPE_MULTIPLE = 'multiple';
    const TYPE_PERIODIC = 'periodic';
    const TYPE_PERMANENT = 'permanent';

    /**
     * Calendar type constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->value = $type;
        $this->key = 'calendarType';
    }
}
