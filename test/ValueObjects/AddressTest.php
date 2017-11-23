<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Address
     */
    protected $address;

    public function setUp()
    {
        $this->address = new Address();
    }

    public function testGetAddressCountryMethod()
    {
        $this->address->setAddressCountry('België');

        $result = $this->address->getAddressCountry();
        $this->assertEquals('België', $result);
    }

    public function testGetAddressLocalityMethod()
    {
        $this->address->setAddressLocality('Brussel');

        $result = $this->address->getAddressLocality();
        $this->assertEquals('Brussel', $result);
    }

    public function testGetPostalCodeMethod()
    {
        $this->address->setPostalCode('1000');

        $result = $this->address->getPostalCode();
        $this->assertEquals('1000', $result);
    }

    public function testGetStreetAddressMethod()
    {
        $this->address->setStreetAddress('Henegouwenkaai 41-43');

        $result = $this->address->getStreetAddress();
        $this->assertEquals('Henegouwenkaai 41-43', $result);
    }
}
