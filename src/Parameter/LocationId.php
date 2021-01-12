<?php

namespace CultuurNet\SearchV3\Parameter;

class LocationId extends AbstractParameter
{
    public function __construct(string $locationId)
    {
        $this->value = $locationId;
        $this->key = 'locationId';
    }
}
