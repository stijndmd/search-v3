<?php

namespace CultuurNet\SearchV3\ValueObjects;

use JMS\Serializer\Annotation\Type;

class Event extends Offer
{

    /**
     * @var Place
     * @Type("CultuurNet\SearchV3\ValueObjects\Place")
     */
    protected $location;

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

}