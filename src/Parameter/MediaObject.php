<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on hasMediaObject.
 */
class MediaObject extends AbstractParameter
{

    /**
     * Id constructor.
     * @param $hasMediaObject
     */
    public function __construct($hasMediaObject)
    {
        $this->value = $hasMediaObject;
        $this->key = 'hasMediaObject';
    }
}
