<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameters to search on addressCountry.
 */
class AddressCountry extends AbstractParameter
{
    public function __construct(string $addressCountry)
    {
        $this->value = $addressCountry;
        $this->key = 'addressCountry';
    }
}
