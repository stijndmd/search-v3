<?php

namespace CultuurNet\SearchV3\Hydrator;

use JMS\Serializer\Annotation\Type;

class Event extends Offer
{

    /**
     * @var Place
     * @Type("CultuurNet\SearchV3\Hydrator\Place")
     */
    protected $location;

}