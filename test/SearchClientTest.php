<?php

namespace CultuurNet\SearchV3\Test;

use CultuurNet\SearchV3\Serializer\SerializerInterface;
use CultuurNet\SearchV3\SearchQueryInterface;
use CultuurNet\SearchV3\SearchClient;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\RequestInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class SearchClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ClientInterface | \PHPUnit_Framework_MockObject_MockObject
     */
    protected $client;

    /**
     * @var SerializerInterface | \PHPUnit_Framework_MockObject_MockObject
     */
    protected $serializer;

    protected $searchClient;

    public function setUp()
    {
        $this->client = $this->getMockBuilder(ClientInterface::class)
            ->getMock();
        $this->serializer = $this->getMockBuilder(SerializerInterface::class)
            ->getMock();
        $this->searchClient = new SearchClient($this->client, $this->serializer);
    }

    public function provideSearchQueryMock()
    {
        $searchQueryMock = $this->getMockBuilder(SearchQueryInterface::class)
            ->getMock();
        $searchQueryMock->expects($this->once())
            ->method('toArray')
            ->willReturn('asdfadsf');

        return $searchQueryMock;
    }

    public function provideResponseMockup()
    {
        $response = $this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->getMock();
        $response->expects($this->once())
            ->method('getBody')
            ->willReturn('test response');

        return $response;
    }

    /**
     * Test the setter and getter of the search client.
     */
    public function testSetClient() {
        $client = new Client(['headers' => ['lorem' => 'ipsum']]);
        $this->searchClient->setClient($client);
        $this->assertEquals($client, $this->searchClient->getClient());
    }

    public function testSearchEventsMethod()
    {
        $options = array('query' => 'asdfadsf');

        $searchQueryMock = $this->provideSearchQueryMock();
        $response = $this->provideResponseMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn('test event');

        $this->client->expects($this->once())
            ->method('request')
            ->with('GET', 'events', $options)
            ->willReturn($response);

        $queryResult = $this->searchClient->searchEvents($searchQueryMock);
        $this->assertEquals('test event', $queryResult);
    }

    public function testSearchPlacesMethod()
    {
        $options = array('query' => 'asdfadsf');

        $searchQueryMock = $this->provideSearchQueryMock();
        $response = $this->provideResponseMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn('test place');

        $this->client->expects($this->once())
            ->method('request')
            ->with('GET', 'places',$options)
            ->willReturn($response);

        $queryResult = $this->searchClient->searchPlaces($searchQueryMock);
        $this->assertEquals('test place', $queryResult);
    }

    public function testSearchOfferMethod()
    {
        $options = array('query' => 'asdfadsf');

        $searchQueryMock = $this->provideSearchQueryMock();
        $response = $this->provideResponseMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn('test offer');

        $this->client->expects($this->once())
            ->method('request')
            ->with('GET', 'offers', $options)
            ->willReturn($response);

        $queryResult = $this->searchClient->searchOffers($searchQueryMock);
        $this->assertEquals('test offer', $queryResult);
    }
}
