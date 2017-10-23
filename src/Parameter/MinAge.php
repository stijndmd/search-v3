<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides the parameter class to add minimum age.
 */
class MinAge extends AbstractParameter
{
    /**
     * MinAge constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
        $this->key = 'minAge';
    }
}