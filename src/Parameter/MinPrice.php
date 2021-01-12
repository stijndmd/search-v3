<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on minimum price.
 */
class MinPrice extends AbstractParameter
{
    /**
     * MinPrice constructor.
     * @param $minPrice float
     */
    public function __construct(float $minPrice)
    {
        $this->value = $minPrice;
        $this->key = 'minPrice';
    }
}
