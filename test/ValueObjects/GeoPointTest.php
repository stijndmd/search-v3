<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\GeoPoint;

class GeoPointTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoPoint
     */
    protected $geoPoint;

    public function setUp()
    {
        $this->geoPoint = new GeoPoint();
    }

    public function testGetLatitudeMethod()
    {
        $this->geoPoint->setLatitude('40.3445');

        $result = $this->geoPoint->getLatitude();
        $this->assertEquals('40.3445', $result);
    }

    public function testGetLongitudeMethod()
    {
        $this->geoPoint->setLongitude('4.321');

        $result = $this->geoPoint->getLongitude();
        $this->assertEquals('4.321', $result);
    }
}
