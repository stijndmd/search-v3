<?php

namespace CultuurNet\SearchV3\Parameter;

final class PostalCode extends AbstractParameter
{
    public function __construct(string $postalCode)
    {
        $this->value = $postalCode;
        $this->key = 'postalCode';
    }
}
