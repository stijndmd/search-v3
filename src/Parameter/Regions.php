<?php

namespace CultuurNet\SearchV3\Parameter;

class Regions extends AbstractParameter
{
    public function __construct(string $region)
    {
        $this->value = $region;
        $this->key = 'regions';
    }

    public function allowsMultiple(): bool
    {
        return true;
    }
}
