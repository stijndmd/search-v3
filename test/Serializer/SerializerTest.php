<?php

namespace CultuurNet\SearchV3\Test\Serializer;

use CultuurNet\SearchV3\Serializer\Serializer;
use CultuurNet\SearchV3\ValueObjects\Address;
use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use JMS\Serializer\SerializerInterface;

class SerializerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Serializer
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new Serializer();
    }

    public function testSetSerializerMethod()
    {
        $serializerInterfaceMock = $this->getMockBuilder(SerializerInterface::class)
            ->getMock();

        $this->serializer->setSerializer($serializerInterfaceMock);
    }

    public function testSerializeMethod()
    {
        $addressMock = new Address();
        $addressMock->setAddressLocality('Brussel');
        $addressMock->setPostalCode('1000');
        $addressMock->setStreetAddress('Henegouwenkaai 41-43');
        $addressMock->setAddressCountry('BE');

        $expectedAddress = '{"addressCountry":"BE","addressLocality":"Brussel","postalCode":"1000","streetAddress":"Henegouwenkaai 41-43"}';

        $result = $this->serializer->serialize($addressMock);
        $this->assertEquals($expectedAddress, $result);
    }

    public function testDeserializeMethod()
    {
        $jsonString = file_get_contents(__DIR__ . '/data/search.json');
        $result = $this->serializer->deserialize($jsonString);

        $this->assertInstanceOf(PagedCollection::class, $result);
    }
}