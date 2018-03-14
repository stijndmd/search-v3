<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Address;
use CultuurNet\SearchV3\ValueObjects\TranslatedAddress;

class TranslatedAddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TranslatedAddress
     */
    protected $address;

    public function setUp()
    {
        $this->address = new TranslatedAddress();
    }

    public function testGetAddressesMethod()
    {
        $addresses = [
            'nl' => new Address(),
            'en' => new Address(),
        ];

        $this->address->setAddresses($addresses);

        $result = $this->address->getAddresses();
        $this->assertEquals($addresses, $result);
    }

    public function testGetAddressForLanguageMethod()
    {
        $addresses = [
            'nl' => new Address('België', 'Brussel', '1000', 'Henegouwenkaai 41-43'),
            'en' => new Address(),
        ];
        $this->address->setAddresses($addresses);

        $result = $this->address->getAddressForLanguage('nl');

        $this->assertEquals($addresses['nl'], $result);
        $this->assertEquals('België', $result->getAddressCountry());
        $this->assertEquals('Brussel', $result->getAddressLocality());
        $this->assertEquals('1000', $result->getPostalCode());
        $this->assertEquals('Henegouwenkaai 41-43', $result->getStreetAddress());
    }
}
