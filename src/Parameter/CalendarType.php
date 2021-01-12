<?php

namespace CultuurNet\SearchV3\Parameter;

final class CalendarType extends AbstractParameter
{
    const TYPE_SINGLE = 'single';
    const TYPE_MULTIPLE = 'multiple';
    const TYPE_PERIODIC = 'periodic';
    const TYPE_PERMANENT = 'permanent';

    public function __construct(string $type)
    {
        $this->value = $type;
        $this->key = 'calendarType';
    }
}
