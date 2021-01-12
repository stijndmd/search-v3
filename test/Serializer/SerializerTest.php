<?php

namespace CultuurNet\SearchV3\Serializer;

use CultuurNet\SearchV3\ValueObjects\Address;
use CultuurNet\SearchV3\ValueObjects\Collection;
use CultuurNet\SearchV3\ValueObjects\Event;
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

        $expectedAddress = '{"addressCountry":"BE","addressLocality":"Brussel",';
        $expectedAddress .= '"postalCode":"1000","streetAddress":"Henegouwenkaai 41-43"}';

        $result = $this->serializer->serialize($addressMock);
        $this->assertEquals($expectedAddress, $result);
    }

    public function testDeserializeMethodForResultsWithoutEmbed()
    {
        $jsonString = file_get_contents(__DIR__ . '/data/search-without-embed.json');

        $expectedMember = new Collection();
        $expectedMember->setItems(
            [
                $this->createEventWithId('https://io.uitdatabank.be/event/cec57058-0acd-4ff8-a9a7-f3097e8d74e3'),
                $this->createEventWithId('https://io.uitdatabank.be/event/efc98e66-f6e0-45ec-93c0-a690928ee356'),
                $this->createEventWithId('https://io.uitdatabank.be/event/ec8e6497-bbb6-481d-aee9-57ccdcf87b7e'),
                $this->createEventWithId('https://io.uitdatabank.be/event/a9588da5-2543-48fe-9528-f4d2ec43c411'),
                $this->createEventWithId('https://io.uitdatabank.be/event/33a90c9c-ecd3-483d-b655-120771be5774'),
            ]
        );

        $expected = new PagedCollection();
        $expected->setItemsPerPage(5);
        $expected->setTotalItems(32449);
        $expected->setMember($expectedMember);

        $actual = $this->serializer->deserialize($jsonString);

        $this->assertEquals($expected, $actual);
    }

    private function createEventWithId(string $id): Event
    {
        $event = new Event();
        $event->setId($id);
        return $event;
    }
}
