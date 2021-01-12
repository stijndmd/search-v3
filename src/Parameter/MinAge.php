<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides the parameter class to add minimum age.
 */
class MinAge extends AbstractParameter
{
    public function __construct(int $value)
    {
        $this->value = $value;
        $this->key = 'minAge';
    }
}
