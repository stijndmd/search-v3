<?php

namespace CultuurNet\SearchV3\Test\ValueObjects;

use CultuurNet\SearchV3\ValueObjects\Address;
use CultuurNet\SearchV3\ValueObjects\TranslatedAddress;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\JsonDeserializationVisitor;

class TranslatedAddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TranslatedAddress
     */
    protected $address;

    /**
     * @var array
     */
    protected $addressValues;

    public function setUp()
    {
        $this->address = new TranslatedAddress();

        $searchResult = json_decode(file_get_contents(__DIR__ . '/data/searchResult.json'), true);
        $this->addressValues = $searchResult['location']['address'];
    }

    public function deserializeAddress()
    {
        $this->visitor = $this->getMockBuilder(JsonDeserializationVisitor::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->context = $this->getMockBuilder(DeserializationContext::class)
            ->getMock();


        $this->address->deserializeFromJson($this->visitor, $this->addressValues, $this->context);
    }

    public function testGetAddressesMethod()
    {
        $addresses = [
            'nl' => new Address('België', 'Brussel', '1000', 'Henegouwenkaai 41-43'),
            'en' => new Address('Belgium', 'Brussels', '1000', 'Henegouwenkaai 41-43'),
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

    public function testDeserializeAddress()
    {
        $this->deserializeAddress();

        $resultNl = $this->address->getAddressForLanguage('nl');
        $resultEn = $this->address->getAddressForLanguage('en');

        $this->assertEquals('Gent', $resultNl->getAddressLocality());
        $this->assertEquals('Ghent', $resultEn->getAddressLocality());
    }
}
