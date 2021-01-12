<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on coordinates.
 */
class Coordinates extends AbstractParameter
{
    public function __construct(string $latitude, string $longitude)
    {
        $this->value = $latitude . ',' . $longitude;
        $this->key = 'coordinates';
    }
}
