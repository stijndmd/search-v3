<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameters to search on PostalCode.
 */

class PostalCode extends AbstractParameter
{

    public function __construct($postalCode)
    {
        $this->value = $postalCode;
        $this->key = 'postalCode';
    }
}
