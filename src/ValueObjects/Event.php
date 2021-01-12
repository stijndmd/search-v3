<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Event extends Offer
{
    /**
     * @var Place|null
     * @Type("CultuurNet\SearchV3\ValueObjects\Place")
     */
    protected $location;

    /**
     * @var PriceInfo|null
     * @Type("array<CultuurNet\SearchV3\ValueObjects\PriceInfo>")
     */
    protected $priceInfo;

    /**
     * @var BookingInfo|null
     * @Type("CultuurNet\SearchV3\ValueObjects\BookingInfo")
     */
    protected $bookingInfo;

    /**
     * Sub events exist if an event is organised on multiple days.
     * @var Event[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\Event>")
     * @SerializedName("subEvent")
     */
    protected $subEvents = [];

    public function getLocation(): ?Place
    {
        return $this->location;
    }

    public function setLocation(Place $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getSubEvents(): array
    {
        return $this->subEvents;
    }

    public function setSubEvents(array $subEvents): self
    {
        $this->subEvents = $subEvents;
        return $this;
    }

    public function getPriceInfo(): ?PriceInfo
    {
        return $this->priceInfo;
    }

    public function setPriceInfo(PriceInfo $priceInfo): self
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    public function getBookingInfo(): ?BookingInfo
    {
        return $this->bookingInfo;
    }

    public function setBookingInfo(BookingInfo $bookingInfo): self
    {
        $this->bookingInfo = $bookingInfo;
        return $this;
    }
}
