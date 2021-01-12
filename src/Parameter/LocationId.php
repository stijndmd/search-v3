<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on locationId.
 */
class LocationId extends AbstractParameter
{
    /**
     * locationId constructor.
     * @param $locationId
     */
    public function __construct(string $locationId)
    {
        $this->value = $locationId;
        $this->key = 'locationId';
    }
}
