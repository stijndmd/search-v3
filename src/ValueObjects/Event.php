<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class Event extends Offer
{
    /**
     * @var Place|null
     * @Type("CultuurNet\SearchV3\ValueObjects\Place")
     */
    private $location;

    /**
     * @var PriceInfo[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\PriceInfo>")
     */
    private $priceInfo = [];

    /**
     * @var BookingInfo|null
     * @Type("CultuurNet\SearchV3\ValueObjects\BookingInfo")
     */
    private $bookingInfo;

    /**
     * Sub events exist if an event is organised on multiple days.
     * @var Event[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\Event>")
     * @SerializedName("subEvent")
     */
    private $subEvents = [];

    public function getLocation(): ?Place
    {
        return $this->location;
    }

    public function setLocation(Place $location): void
    {
        $this->location = $location;
    }

    public function getSubEvents(): array
    {
        return $this->subEvents;
    }

    public function setSubEvents(array $subEvents): void
    {
        $this->subEvents = $subEvents;
    }

    /**
     * @return PriceInfo[]
     */
    public function getPriceInfo(): array
    {
        return $this->priceInfo;
    }

    /**
     * @param PriceInfo[] $priceInfo
     */
    public function setPriceInfo(array $priceInfo): void
    {
        $this->priceInfo = $priceInfo;
    }

    public function getBookingInfo(): ?BookingInfo
    {
        return $this->bookingInfo;
    }

    public function setBookingInfo(BookingInfo $bookingInfo): void
    {
        $this->bookingInfo = $bookingInfo;
    }
}
