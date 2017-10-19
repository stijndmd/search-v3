<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Event extends Offer
{

    /**
     * @var Place
     * @Type("CultuurNet\SearchV3\ValueObjects\Place")
     */
    protected $location;

    /**
     * Sub events exist if an event is organised on multiple days.
     * @var Event[]
     * @Type("array<CultuurNet\SearchV3\ValueObjects\Event>")
     * @SerializedName("subEvent")
     */
    protected $subEvents;


    /**
     * @return Place
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @param Place $location
     * @return Event
     */
    public function setLocation($location) {
        $this->location = $location;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubEvents()
    {
        return $this->subEvents;
    }

    /**
     * @param mixed $subEvents
     * @return Event
     */
    public function setSubEvents($subEvents)
    {
        $this->subEvents = $subEvents;
        return $this;
    }

}