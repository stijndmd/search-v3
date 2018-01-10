<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on modifiedFrom.
 */
class ModifiedFrom extends AbstractDateParameter
{

    /**
     * ModifiedFrom constructor.
     * @param \DateTime $modifiedFrom
     */
    public function __construct(\DateTime $modifiedFrom)
    {
        $this->value = $modifiedFrom;
        $this->key = 'modifiedFrom';
    }
}
