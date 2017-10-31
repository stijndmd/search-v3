<?php

namespace CultuurNet\SearchV3\Parameter;


class AbstractDateParameter extends AbstractParameter {

    /**
     * Formats the date.
     * @param $date
     * @return string
     */
    public function formatDate($date)
    {
        $date = new \DateTime($date);
        return $date->format('Y-m-d H:i:s');
    }
}