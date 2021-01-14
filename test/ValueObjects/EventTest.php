<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
    /**
     * @var Event
     */
    protected $event;

    public function setUp(): void
    {
        $this->event = new Event();
    }

    public function testNameGettersAndSetters(): void
    {
        $name = new TranslatedString(['nl' => 'event name']);
        $this->event->setName($name);
        self::assertEquals($name, $this->event->getName());
    }

    public function testGetLocationMethod(): void
    {
        $location = new Place();
        $this->event->setLocation($location);

        $result = $this->event->getLocation();
        self::assertEquals($location, $result);
    }

    public function testGetSubEventsMethod(): void
    {
        $this->event->setSubEvents(array(new Event(), new Event()));

        $result = $this->event->getSubEvents();
        self::assertEquals(array(new Event(), new Event()), $result);
    }

    public function testGetPriceInfoMethod(): void
    {
        $priceInfo = new PriceInfo();
        $this->event->setPriceInfo([$priceInfo]);

        $result = $this->event->getPriceInfo();
        self::assertEquals([$priceInfo], $result);
    }

    public function testGetBookingInfoMethod(): void
    {
        $bookingInfo = new BookingInfo();
        $this->event->setBookingInfo($bookingInfo);

        $result = $this->event->getBookingInfo();
        self::assertEquals($bookingInfo, $result);
    }
}
