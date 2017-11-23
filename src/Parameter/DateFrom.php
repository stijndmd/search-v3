<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateFrom.
 */
class DateFrom extends AbstractDateParameter
{

    /**
     * DateFrom constructor.
     * @param $dateFrom
     * @param $offset
     */
    public function __construct($dateFrom, $offset = '+0')
    {
        $this->value = $this->formatDate($dateFrom, $offset);
        $this->key = 'dateFrom';
    }
}
