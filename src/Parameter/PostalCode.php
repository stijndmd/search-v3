<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameters to search on postalCode.
 */
class PostalCode extends AbstractParameter
{
    /**
     * PostalCode constructor.
     * @param $postalCode
     */
    public function __construct($postalCode)
    {
        $this->value = $postalCode;
        $this->key = 'postalCode';
    }
}
