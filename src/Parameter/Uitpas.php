<?php

namespace CultuurNet\SearchV3\Parameter;

class Uitpas extends AbstractParameter
{
    public function __construct(bool $uitpas)
    {
        $this->value = $uitpas;
        $this->key = 'uitpas';
    }
}
