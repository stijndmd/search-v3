<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on term labels.
 */
class TermLabels extends AbstractParameter
{
    public function __construct(string $termLabel)
    {
        $this->value = $termLabel;
        $this->key = 'termLabels';
    }
}
