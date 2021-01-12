<?php

namespace CultuurNet\SearchV3\Parameter;

class Id extends AbstractParameter
{
    public function __construct(string $id)
    {
        $this->value = $id;
        $this->key = 'id';
    }
}
