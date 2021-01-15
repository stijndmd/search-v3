<?php

namespace CultuurNet\SearchV3\Parameter;

final class MaxAge extends AbstractParameter
{
    public function __construct(int $value)
    {
        $this->value = $value;
        $this->key = 'maxAge';
    }
}
