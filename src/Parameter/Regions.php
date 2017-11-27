<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on regions.
 */
class Regions extends AbstractParameter
{

    /**
     * Regions constructor.
     * @param $region string
     */
    public function __construct($region)
    {
        $this->value = $region;
        $this->key = 'regions';
    }
}
