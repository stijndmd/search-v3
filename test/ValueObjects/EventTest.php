<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\BookingInfo;
use CultuurNet\SearchV3\ValueObjects\Event;
use CultuurNet\SearchV3\ValueObjects\Place;
use CultuurNet\SearchV3\ValueObjects\PriceInfo;

class EventTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Event
     */
    protected $event;

    public function setUp()
    {
        $this->event = new Event();
    }

    public function testGetLocationMethod()
    {
        $location = new Place();
        $this->event->setLocation($location);

        $result = $this->event->getLocation();
        $this->assertEquals($location, $result);
    }

    public function testGetSubEventsMethod()
    {
        $this->event->setSubEvents(array(new Event(), new Event()));

        $result = $this->event->getSubEvents();
        $this->assertEquals(array(new Event(), new Event()), $result);
    }

    public function testGetPriceInfoMethod()
    {
        $priceInfo = new PriceInfo();
        $this->event->setPriceInfo($priceInfo);

        $result = $this->event->getPriceInfo();
        $this->assertEquals($priceInfo, $result);
    }

    public function testGetBookingInfoMethod()
    {
        $bookingInfo = new BookingInfo();
        $this->event->setBookingInfo($bookingInfo);

        $result = $this->event->getBookingInfo();
        $this->assertEquals($bookingInfo, $result);
    }
}
