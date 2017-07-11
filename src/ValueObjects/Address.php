<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Address
{

    /**
     * @var string
     * @Type("string")
     */
    protected $addressCountry;

    /**
     * @var string
     * @Type("string")
     */
    protected $addressLocality;

    /**
     * @var string
     * @Type("string")
     */
    protected $postalCode;

    /**
     * @var string
     * @Type("string")
     */
    protected $streetAddress;

}