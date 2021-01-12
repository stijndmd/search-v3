<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on id.
 */
class Id extends AbstractParameter
{
    /**
     * Id constructor.
     * @param $id
     */
    public function __construct(string $id)
    {
        $this->value = $id;
        $this->key = 'id';
    }
}
