<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on availableFrom.
 */
class AvailableFrom extends AbstractDateParameter
{

    /**
     * AvailableFrom constructor.
     * @param \DateTime|string $availableFrom
     */
    public function __construct($availableFrom)
    {
        $this->value = $availableFrom;
        $this->key = 'availableFrom';
    }
}
