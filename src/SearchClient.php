<?php

namespace CultuurNet\SearchV3;

use CultuurNet\SearchV3\Serializer\SerializerInterface;
use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use GuzzleHttp\ClientInterface;

class SearchClient implements SearchClientInterface
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function setClient(ClientInterface $client): void
    {
        $this->client = $client;
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function searchEvents(SearchQueryInterface $searchQuery): PagedCollection
    {
        return $this->search($searchQuery, 'events');
    }

    public function searchPlaces(SearchQueryInterface $searchQuery): PagedCollection
    {
        return $this->search($searchQuery, 'places');
    }

    public function searchOffers(SearchQueryInterface $searchQuery): PagedCollection
    {
        return $this->search($searchQuery, 'offers');
    }

    protected function search(SearchQueryInterface $searchQuery, $type): PagedCollection
    {
        $options = [
          'query' => $searchQuery->toArray()
        ];

        $result = $this->client->request('GET', $type, $options);

        return $this->serializer->deserialize($result->getBody(true));
    }
}
