<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on term ids.
 */
class TermIds extends AbstractParameter
{
    public function __construct(string $termId)
    {
        $this->value = $termId;
        $this->key = 'termIds';
    }
}
