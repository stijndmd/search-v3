<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateFrom.
 */
class DateFrom extends AbstractParameter
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
