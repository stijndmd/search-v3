<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on modifiedTo.
 */
class ModifiedTo extends AbstractDateParameter
{

    /**
     * ModifiedTo constructor.
     * @param \DateTime|string $modifiedTo
     */
    public function __construct($modifiedTo)
    {
        $this->value = $modifiedTo;
        $this->key = 'modifiedTo';
    }
}
