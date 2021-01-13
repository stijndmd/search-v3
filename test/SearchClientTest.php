<?php

namespace CultuurNet\SearchV3;

use CultuurNet\SearchV3\Serializer\SerializerInterface;
use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use Guzzle\Http\Message\Response;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;

class SearchClientTest extends TestCase
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
            ->willReturn(['foo' => 'bar']);

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
    public function testSetClient()
    {
        $client = new Client(['headers' => ['lorem' => 'ipsum']]);
        $this->searchClient->setClient($client);
        $this->assertEquals($client, $this->searchClient->getClient());
    }

    public function testSearchEventsMethod()
    {
        $options = array('query' => ['foo' => 'bar']);

        $searchQueryMock = $this->provideSearchQueryMock();
        $pagedCollection = new PagedCollection();
        $response = $this->provideResponseMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn($pagedCollection);

        $this->client->expects($this->once())
            ->method('request')
            ->with('GET', 'events', $options)
            ->willReturn($response);

        $queryResult = $this->searchClient->searchEvents($searchQueryMock);
        $this->assertEquals($pagedCollection, $queryResult);
    }

    public function testSearchPlacesMethod()
    {
        $options = array('query' => ['foo' => 'bar']);

        $searchQueryMock = $this->provideSearchQueryMock();
        $pagedCollection = new PagedCollection();
        $response = $this->provideResponseMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn($pagedCollection);

        $this->client->expects($this->once())
            ->method('request')
            ->with('GET', 'places', $options)
            ->willReturn($response);

        $queryResult = $this->searchClient->searchPlaces($searchQueryMock);
        $this->assertEquals($pagedCollection, $queryResult);
    }

    public function testSearchOfferMethod()
    {
        $options = array('query' => ['foo' => 'bar']);
        $pagedCollection = new PagedCollection();
        $searchQueryMock = $this->provideSearchQueryMock();

        $response = $this->provideResponseMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn($pagedCollection);

        $this->client->expects($this->once())
            ->method('request')
            ->with('GET', 'offers', $options)
            ->willReturn($response);

        $queryResult = $this->searchClient->searchOffers($searchQueryMock);
        $this->assertEquals($pagedCollection, $queryResult);
    }
}
