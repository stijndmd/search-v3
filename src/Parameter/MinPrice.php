<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on minimum price.
 */
class MinPrice extends AbstractParameter
{

    /**
     * MinPrice constructor.
     * @param $minPrice
     */
    public function __construct($minPrice)
    {
        $this->value = $minPrice;
        $this->key = 'minPrice';
    }
}
