<?php

namespace CultuurNet\SearchV3\Hydrator;

use JMS\Serializer\Annotation\Type;

class Place extends Offer
{

    /**
     * @var Address
     * @Type("CultuurNet\SearchV3\Hydrator\Address")
     */
    protected $address;

}