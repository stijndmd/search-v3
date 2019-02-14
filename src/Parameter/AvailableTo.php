<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on availableTo.
 */
class AvailableTo extends AbstractDateParameter
{

    /**
     * AvailableTo constructor.
     * @param \DateTime|string $availableTo
     */
    public function __construct($availableTo)
    {
        $this->value = $availableTo;
        $this->key = 'availableTo';
    }
}
