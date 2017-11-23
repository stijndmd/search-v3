<?php

namespace CultuurNet\SearchV3\Parameter;

class AbstractDateParameter extends AbstractParameter
{

    /**
     * Formats the date.
     * @param $date
     * @param $offset
     * @return string
     */
    public function formatDate($date, $offset)
    {
        $date = new \DateTime($date, new \DateTimeZone($offset));
        return $date->format(\DateTime::ATOM);
    }
}
