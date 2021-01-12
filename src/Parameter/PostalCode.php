<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameters to search on postalCode.
 */
class PostalCode extends AbstractParameter
{
    public function __construct(string $postalCode)
    {
        $this->value = $postalCode;
        $this->key = 'postalCode';
    }
}
