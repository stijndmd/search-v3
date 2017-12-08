<?php

namespace CultuurNet\SearchV3;

use CultuurNet\SearchV3\Serializer\SerializerInterface;
use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use GuzzleHttp\ClientInterface;

/**
 * Default search client to perform searches on the search api.
 * @package CultuurNet\SearchV3
 */
class SearchClient
{

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * SearchClient constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    /**
     * Perform a search on events.
     *
     * @param SearchQueryInterface $searchQuery
     * @return PagedCollection
     */
    public function searchEvents(SearchQueryInterface $searchQuery)
    {
        return $this->search($searchQuery, 'events');
    }

    /**
     * Perform a search on places.
     *
     * @param SearchQueryInterface $searchQuery
     * @return PagedCollection
     */
    public function searchPlaces(SearchQueryInterface $searchQuery)
    {
        return $this->search($searchQuery, 'places');
    }

    /**
     * Perform a search on offers.
     * @param SearchQueryInterface $searchQuery
     * @return PagedCollection
     */
    public function searchOffers(SearchQueryInterface $searchQuery)
    {
        return $this->search($searchQuery, 'offers');
    }

    /**
     * Perform a search on a given type.
     * @param SearchQueryInterface $searchQuery
     * @param $type The type to search on
     * @return PagedCollection
     */
    protected function search(SearchQueryInterface $searchQuery, $type)
    {

        $options = [
          'query' => $searchQuery->toArray()
        ];

        $result = $this->client->request('GET', $type, $options);

        return $this->serializer->deserialize($result->getBody(true));
    }
}
