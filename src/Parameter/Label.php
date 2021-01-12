<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on labels.
 */
class Label extends AbstractParameter
{
    public function __construct(string $label)
    {
        $this->value = $label;
        $this->key = 'labels';
    }

    public function allowsMultiple(): bool
    {
        return true;
    }
}
