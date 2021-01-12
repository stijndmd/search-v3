<?php

namespace CultuurNet\SearchV3\Parameter;

class MinAge extends AbstractParameter
{
    public function __construct(int $value)
    {
        $this->value = $value;
        $this->key = 'minAge';
    }
}
