<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateTo.
 */
class DateTo extends AbstractDateParameter
{

    /**
     * DateFrom constructor.
     * @param \DateTime|string $dateTo
     */
    public function __construct($dateTo)
    {
        $this->value = $dateTo;
        $this->key = 'dateTo';
    }
}
