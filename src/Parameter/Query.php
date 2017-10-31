<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides the parameter class to add advanced queries.
 */
class Query extends AbstractParameter
{

    /**
     * Query constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
        $this->key = 'q';
    }
}
