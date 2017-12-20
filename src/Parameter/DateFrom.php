<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateFrom.
 */
class DateFrom extends AbstractDateParameter
{

    /**
     * DateFrom constructor.
     * @param \DateTime $dateFrom
     */
    public function __construct(\DateTime $dateFrom)
    {
        $this->value = $dateFrom;
        $this->key = 'dateFrom';
    }
}
