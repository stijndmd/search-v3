<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on createdFrom.
 */
class CreatedFrom extends AbstractDateParameter
{
    /**
     * CreatedFrom constructor.
     * @param \DateTime|string $createdFrom
     */
    public function __construct($createdFrom)
    {
        $this->value = $createdFrom;
        $this->key = 'createdFrom';
    }
}
