<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on createdFrom.
 */
class CreatedFrom extends AbstractParameter
{

    /**
     * CreatedFrom constructor.
     * @param \DateTime $createdFrom
     */
    public function __construct(\DateTime $createdFrom)
    {
        $this->value = $createdFrom;
        $this->key = 'createdFrom';
    }
}
