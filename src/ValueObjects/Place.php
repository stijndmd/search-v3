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
     * @Type("CultuurNet\SearchV3\ValueObjects\GeoPoint")
     */
    protected $geo;

    /**
     * @Type("CultuurNet\SearchV3\ValueObjects\OpeningHours")
     */
    protected $openingHours;

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return GeoPoint
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @param mixed $geo
     * @return Place
     */
    public function setGeo($geo)
    {
        $this->geo = $geo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param mixed $openingHours
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
    }
}
