<?php

namespace CultuurNet\SearchV3\Parameter;

class TermLabels extends AbstractParameter
{
    public function __construct(string $termLabel)
    {
        $this->value = $termLabel;
        $this->key = 'termLabels';
    }

    public function allowsMultiple(): bool
    {
        return true;
    }
}
