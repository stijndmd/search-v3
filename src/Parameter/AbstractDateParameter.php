<?php

namespace CultuurNet\SearchV3\Parameter;

abstract class AbstractDateParameter extends AbstractParameter
{
    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        if ($this->value instanceof \DateTime) {
            return $this->value->format(\DateTime::ATOM);
        } else {
            return $this->value;
        }
    }
}
