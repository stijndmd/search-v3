<?php

namespace CultuurNet\SearchV3\Parameter;

class Query extends AbstractParameter
{
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->key = 'q';
    }
}
