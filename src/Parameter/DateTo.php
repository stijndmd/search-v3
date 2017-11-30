<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateTo.
 */
class DateTo extends AbstractParameter
{

    /**
     * DateFrom constructor.
     * @param \DateTime $dateTo
     */
    public function __construct(\DateTime $dateTo)
    {
        $this->value = $dateTo;
        $this->key = 'dateTo';
    }
}
