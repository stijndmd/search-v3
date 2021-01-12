<?php

namespace CultuurNet\SearchV3\Parameter;

class PostalCode extends AbstractParameter
{
    public function __construct(string $postalCode)
    {
        $this->value = $postalCode;
        $this->key = 'postalCode';
    }
}
