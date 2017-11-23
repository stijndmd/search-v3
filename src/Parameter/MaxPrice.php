<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on maximum price.
 */
class MaxPrice extends AbstractParameter
{

    /**
     * MaxPrice constructor.
     * @param $maxPrice float
     */
    public function __construct($maxPrice)
    {
        $this->value = $maxPrice;
        $this->key = 'maxPrice';
    }
}
