<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on organizerId.
 */
class OrganizerId extends AbstractParameter
{
    public function __construct(string $organizerId)
    {
        $this->value = $organizerId;
        $this->key = 'organizerId';
    }
}
