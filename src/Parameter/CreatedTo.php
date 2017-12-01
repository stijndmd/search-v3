<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on createdTo.
 */
class CreatedTo extends AbstractParameter
{

    /**
     * CreatedTo constructor.
     * @param \DateTime $createdTo
     */
    public function __construct(\DateTime $createdTo)
    {
        $this->value = $createdTo;
        $this->key = 'createdTo';
    }
}
