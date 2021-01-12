<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on creator.
 */
class Creator extends AbstractParameter
{
    /**
     * Creator constructor.
     * @param $creator
     */
    public function __construct($creator)
    {
        $this->value = $creator;
        $this->key = 'creator';
    }
}
