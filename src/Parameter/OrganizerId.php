<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on organizerId.
 */
class OrganizerId extends AbstractParameter
{

    /**
     * locationId constructor.
     * @param $organizerId
     */
    public function __construct($organizerId)
    {
        $this->value = $organizerId;
        $this->key = 'organizerId';
    }
}
