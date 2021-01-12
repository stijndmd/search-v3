<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on locationId.
 */
class LocationId extends AbstractParameter
{
    public function __construct(string $locationId)
    {
        $this->value = $locationId;
        $this->key = 'locationId';
    }
}
