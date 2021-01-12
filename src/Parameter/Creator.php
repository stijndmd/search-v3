<?php

namespace CultuurNet\SearchV3\Parameter;

final class Creator extends AbstractParameter
{
    public function __construct(string $creator)
    {
        $this->value = $creator;
        $this->key = 'creator';
    }
}
