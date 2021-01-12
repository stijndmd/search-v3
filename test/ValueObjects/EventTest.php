<?php

namespace CultuurNet\SearchV3\ValueObjects;

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

    public function testNameGettersAndSetters()
    {
        $name = new TranslatedString(['nl' => 'event name']);
        $this->event->setName($name);
        $this->assertEquals($name, $this->event->getName());
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
