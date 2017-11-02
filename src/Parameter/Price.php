<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on price.
 */
class Price extends AbstractParameter
{

    /**
     * Price constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->value = $price;
        $this->key = 'price';
    }
}
