<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on hasMediaObject.
 */
class MediaObject extends AbstractParameter
{
    public function __construct(bool $hasMediaObject)
    {
        $this->value = $hasMediaObject;
        $this->key = 'hasMediaObject';
    }
}
