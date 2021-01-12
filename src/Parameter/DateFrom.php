<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateFrom.
 */
class DateFrom extends AbstractDateParameter
{
    /**
     * DateFrom constructor.
     * @param \DateTime|string $dateFrom
     */
    public function __construct($dateFrom)
    {
        $this->value = $dateFrom;
        $this->key = 'dateFrom';
    }
}
