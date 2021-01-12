<?php

namespace CultuurNet\SearchV3\Parameter;

class AudienceType extends AbstractParameter
{
    const AUDIENCE_EVERYONE = 'everyone';
    const AUDIENCE_MEMBERS = 'members';
    const AUDIENCE_EDUCATION = 'education';

    public function __construct(string $audienceType)
    {
        $this->value = $audienceType;
        $this->key = 'audienceType';
    }
}
