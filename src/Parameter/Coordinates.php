<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on coordinates.
 */
class Coordinates extends AbstractParameter
{
    /**
     * Coordinates constructor.
     * @param $latitude string
     * @param $longitude string
     */
    public function __construct($latitude, $longitude)
    {
        $this->value = $latitude . ',' . $longitude;
        $this->key = 'coordinates';
    }
}
