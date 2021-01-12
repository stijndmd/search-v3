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
    public function __construct(string $creator)
    {
        $this->value = $creator;
        $this->key = 'creator';
    }
}
