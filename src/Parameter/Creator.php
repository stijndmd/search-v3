<?php

namespace CultuurNet\SearchV3\Parameter;

class Creator extends AbstractParameter
{
    public function __construct(string $creator)
    {
        $this->value = $creator;
        $this->key = 'creator';
    }
}
