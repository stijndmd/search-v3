<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateTo.
 */
class DateTo extends AbstractDateParameter
{

    /**
     * DateFrom constructor.
     * @param $dateTo
     */
    public function __construct($dateTo)
    {
        $this->value = $this->formatDate($dateTo);
        $this->key = 'dateTo';
    }
}
