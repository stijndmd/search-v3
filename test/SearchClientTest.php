<?php

namespace CultuurNet\SearchV3\Test;

use Guzzle\Http\ClientInterface;
use CultuurNet\SearchV3\Serializer\SerializerInterface;
use CultuurNet\SearchV3\SearchQueryInterface;
use CultuurNet\SearchV3\SearchClient;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\RequestInterface;

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

    public function provideRequestMockup()
    {
        $result = $this->getMockBuilder(Response::class)
            ->disableOriginalConstructor()
            ->getMock();
        $result->expects($this->once())
            ->method('getBody')
            ->willReturn('test response');

        $request = $this->getMockBuilder(RequestInterface::class)
            ->getMock();
        $request->expects($this->once())
            ->method('send')
            ->willReturn($result);

        return $request;
    }

    public function testSearchEventsMethod()
    {
        $options = array('query' => 'asdfadsf');

        $searchQueryMock = $this->provideSearchQueryMock();
        $request = $this->provideRequestMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn('test event');

        $this->client->expects($this->once())
            ->method('createRequest')
            ->with('GET', 'events', null, null, $options)
            ->willReturn($request);

        $queryResult = $this->searchClient->searchEvents($searchQueryMock);
        $this->assertEquals('test event', $queryResult);
    }

    public function testSearchOfferMethod()
    {
        $options = array('query' => 'asdfadsf');

        $searchQueryMock = $this->provideSearchQueryMock();
        $request = $this->provideRequestMockup();

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with('test response')
            ->willReturn('test offer');

        $this->client->expects($this->once())
            ->method('createRequest')
            ->with('GET', 'offers', null, null, $options)
            ->willReturn($request);

        $queryResult = $this->searchClient->searchOffers($searchQueryMock);
        $this->assertEquals('test offer', $queryResult);
    }
}
