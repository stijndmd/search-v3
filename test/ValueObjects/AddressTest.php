<?php

namespace CultuurNet\SearchV3\ValueObjects;

use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    /**
     * @var Address
     */
    protected $address;

    public function setUp(): void
    {
        $this->address = new Address();
    }

    public function testGetAddressCountryMethod(): void
    {
        $this->address->setAddressCountry('België');

        $result = $this->address->getAddressCountry();
        self::assertEquals('België', $result);
    }

    public function testGetAddressLocalityMethod(): void
    {
        $this->address->setAddressLocality('Brussel');

        $result = $this->address->getAddressLocality();
        self::assertEquals('Brussel', $result);
    }

    public function testGetPostalCodeMethod(): void
    {
        $this->address->setPostalCode('1000');

        $result = $this->address->getPostalCode();
        self::assertEquals('1000', $result);
    }

    public function testGetStreetAddressMethod(): void
    {
        $this->address->setStreetAddress('Henegouwenkaai 41-43');

        $result = $this->address->getStreetAddress();
        self::assertEquals('Henegouwenkaai 41-43', $result);
    }
}
