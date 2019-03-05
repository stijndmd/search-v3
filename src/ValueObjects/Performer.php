<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Performer
{

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    public function __construct(
        $name = null
    ) {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
