<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on regions.
 */
class Regions extends AbstractParameter
{
    public function __construct(string $region)
    {
        $this->value = $region;
        $this->key = 'regions';
    }
}
