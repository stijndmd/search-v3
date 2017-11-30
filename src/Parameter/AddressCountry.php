<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameters to search on addressCountry.
 */

class AddressCountry extends AbstractParameter
{

    /**
     * AddressCountry constructor.
     * @param $addressCountry
     */
    public function __construct($addressCountry)
    {
        $this->value = $addressCountry;
        $this->key = 'addressCountry';
    }
}
