<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on uitpas.
 */
class Uitpas extends AbstractParameter
{
    public function __construct(bool $uitpas)
    {
        $this->value = $uitpas;
        $this->key = 'uitpas';
    }
}
