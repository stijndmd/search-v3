<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides the parameter class to add maximum age.
 */
class MaxAge extends AbstractParameter
{
    /**
     * MaxAge constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
        $this->key = 'maxAge';
    }
}
