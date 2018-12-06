<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on labels.
 */
class Label extends AbstractParameter
{

    /**
     * Label constructor.
     * @param $label
     */
    public function __construct($label)
    {
        $this->value = $label;
        $this->key = 'labels';
    }
}
