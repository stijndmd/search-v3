<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on audienceType.
 */
class AudienceType extends AbstractParameter
{

    const AUDIENCE_EVERYONE = 'everyone';
    const AUDIENCE_MEMBERS = 'members';
    const AUDIENCE_EDUCATION = 'education';

    /**
     * AudienceType constructor.
     * @param $audienceType
     */
    public function __construct($audienceType)
    {
        $this->value = $audienceType;
        $this->key = 'audienceType';
    }
}
