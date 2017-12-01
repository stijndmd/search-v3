<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on availableFrom.
 */
class AvailableFrom extends AbstractParameter
{

    /**
     * AvailableFrom constructor.
     * @param \DateTime $availableFrom
     */
    public function __construct(\DateTime $availableFrom)
    {
        $this->value = $availableFrom;
        $this->key = 'availableFrom';
    }
}
