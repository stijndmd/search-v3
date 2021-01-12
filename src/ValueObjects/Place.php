<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

final class Place extends Offer
{
    /**
     * @var Address|null
     * @Type("CultuurNet\SearchV3\ValueObjects\TranslatedAddress")
     */
    private $address;

    /**
     * @var GeoPoint
     * @Type("CultuurNet\SearchV3\ValueObjects\GeoPoint")
     */
    private $geo;

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
