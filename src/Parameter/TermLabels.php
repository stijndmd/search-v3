<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on term labels.
 */
class TermLabels extends AbstractParameter
{

    /**
     * TermLabels constructor.
     * @param $termLabel string
     */
    public function __construct($termLabel)
    {
        $this->value = $termLabel;
        $this->key = 'termLabels';
    }
}
