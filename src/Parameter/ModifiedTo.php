<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on modifiedTo.
 */
class ModifiedTo extends AbstractParameter
{

    /**
     * ModifiedTo constructor.
     * @param \DateTime $modifiedTo
     */
    public function __construct(\DateTime $modifiedTo)
    {
        $this->value = $modifiedTo;
        $this->key = 'modifiedTo';
    }
}
