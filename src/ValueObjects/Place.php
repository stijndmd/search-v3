<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Place extends Offer
{
    /**
     * @var Address|null
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedAddress")
     */
    protected $address;

    /**
     * @var GeoPoint
     * @Type("CultuurNet\SearchV3\ValueObjects\GeoPoint")
     */
    protected $geo;

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getGeo(): ?GeoPoint
    {
        return $this->geo;
    }

    public function setGeo(GeoPoint $geo): self
    {
        $this->geo = $geo;
        return $this;
    }
}
