<?php

namespace CultuurNet\SearchV3\Parameter;

class MediaObject extends AbstractParameter
{
    public function __construct(bool $hasMediaObject)
    {
        $this->value = $hasMediaObject;
        $this->key = 'hasMediaObject';
    }
}
