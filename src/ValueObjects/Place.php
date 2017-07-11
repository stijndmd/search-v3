<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Place extends Offer
{

    /**
     * @var Address
     * @Type("CultuurNet\SearchV3\ValueObjects\Address")
     */
    protected $address;

}