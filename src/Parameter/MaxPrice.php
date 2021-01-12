<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on maximum price.
 */
class MaxPrice extends AbstractParameter
{
    public function __construct(float $maxPrice)
    {
        $this->value = $maxPrice;
        $this->key = 'maxPrice';
    }
}
