<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Audience
{

    /**
     * @var string
     * @Type("string")
     */
    protected $audienceType;

    public function __construct(
        $audienceType = null
    ) {
        $this->audienceType = $audienceType;
    }


    /**
     * @return string
     */
    public function getAudienceType()
    {
        return $this->audienceType;
    }

    /**
     * @param string $audienceType
     * @return Audience
     */
    public function setAudienceType($audienceType)
    {
        $this->audienceType = $audienceType;

        return $this;
    }
}
