<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateTo.
 */
class DateTo extends AbstractParameter
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

    /**
     * Formats the date.
     * @param $dateTo
     * @return string
     */
    private function formatDate($dateTo)
    {
        $date = new \DateTime($dateTo);
        return $date->format('Y-m-d H:i:s');
    }
}
