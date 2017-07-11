<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Event extends Offer
{

    /**
     * @var Place
     * @Type("CultuurNet\SearchV3\ValueObjects\Place")
     */
    protected $location;

}