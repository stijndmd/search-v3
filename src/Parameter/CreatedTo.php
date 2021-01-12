<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on createdTo.
 */
class CreatedTo extends AbstractDateParameter
{
    /**
     * CreatedTo constructor.
     * @param \DateTime|string $createdTo
     */
    public function __construct($createdTo)
    {
        $this->value = $createdTo;
        $this->key = 'createdTo';
    }
}
