<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Address;
use CultuurNet\SearchV3\ValueObjects\GeoPoint;
use CultuurNet\SearchV3\ValueObjects\Place;

class PlaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Place
     */
    protected $place;

    public function setUp()
    {
        $this->place = new Place();

        $mockAddress = new Address();
        $mockGeo = new GeoPoint();

        $this->place->setAddress($mockAddress);
        $this->place->setGeo($mockGeo);
    }

    public function testGetAddressMethod()
    {
        $result = $this->place->getAddress();
        $this->assertInstanceOf(Address::class, $result);
    }

    public function testGetGeoMethod()
    {
        $result = $this->place->getGeo();
        $this->assertInstanceOf(GeoPoint::class, $result);
    }
}
