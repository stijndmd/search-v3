<?php

namespace CultuurNet\SearchV3\Parameter;

class MinPrice extends AbstractParameter
{
    public function __construct(float $minPrice)
    {
        $this->value = $minPrice;
        $this->key = 'minPrice';
    }
}
