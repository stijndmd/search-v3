<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on availableTo.
 */
class AvailableTo extends AbstractParameter
{

    /**
     * AvailableTo constructor.
     * @param \DateTime $availableTo
     */
    public function __construct(\DateTime $availableTo)
    {
        $this->value = $availableTo;
        $this->key = 'availableTo';
    }
}
