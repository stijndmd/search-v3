<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on minimum price.
 */
class MinPrice extends AbstractParameter
{
    public function __construct(float $minPrice)
    {
        $this->value = $minPrice;
        $this->key = 'minPrice';
    }
}
