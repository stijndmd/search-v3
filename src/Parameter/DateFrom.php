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
     */
    public function __construct($dateFrom)
    {
        $this->value = $this->formatDate($dateFrom);
        $this->key = 'dateFrom';
    }
}
