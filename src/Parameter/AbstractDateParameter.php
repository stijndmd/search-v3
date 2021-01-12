<?php

namespace CultuurNet\SearchV3\Parameter;

abstract class AbstractDateParameter extends AbstractParameter
{
    public function getValue()
    {
        if ($this->value instanceof \DateTime) {
            return $this->value->format(\DateTime::ATOM);
        }

        return $this->value;
    }
}
