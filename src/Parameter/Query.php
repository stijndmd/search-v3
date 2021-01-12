<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides the parameter class to add advanced queries.
 */
class Query extends AbstractParameter
{
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->key = 'q';
    }
}
