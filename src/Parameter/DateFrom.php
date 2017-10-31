<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on dateFrom.
 */
class DateFrom extends AbstractParameter
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

    /**
     * Formats the date.
     * @param $dateFrom
     * @return string
     */
    private function formatDate($dateFrom)
    {
        $date = new \DateTime($dateFrom);
        return $date->format('Y-m-d H:i:s');
    }
}
