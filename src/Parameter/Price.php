<?php

namespace CultuurNet\SearchV3\Parameter;

class Price extends AbstractParameter
{
    public function __construct(float $price)
    {
        $this->value = $price;
        $this->key = 'price';
    }
}
