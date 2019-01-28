<?php

namespace CultuurNet\SearchV3\Parameter;

abstract class AbstractDateParameter extends AbstractParameter
{
    /**
     * Formats the date.
     * @param $date
     * @return string
     */
    protected function formatDate($date)
    {
        return $date->format(\DateTime::ATOM);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        if ($this->value instanceof \DateTime) {
            return $this->formatDate($this->value);
        } else {
            return $this->value;
        }
    }
}
