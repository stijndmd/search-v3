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
     * @param $offset
     */
    public function __construct($dateTo, $offset = '+0')
    {
        $this->value = $this->formatDate($dateTo, $offset);
        $this->key = 'dateTo';
    }
}
