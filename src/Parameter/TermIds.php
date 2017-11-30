<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on term ids.
 */
class TermIds extends AbstractParameter
{

    /**
     * TermIds constructor.
     * @param $termId string
     */
    public function __construct($termId)
    {
        $this->value = $termId;
        $this->key = 'termIds';
    }
}
