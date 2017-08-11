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

    /**
     * @return Address
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Place
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

}