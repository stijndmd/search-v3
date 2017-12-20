<?php

namespace CultuurNet\SearchV3;

use CultuurNet\SearchV3\Serializer\SerializerInterface;
use GuzzleHttp\ClientInterface;

/**
 * Default search client to perform searches on the search api.
 * @package CultuurNet\SearchV3
 */
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
     * {@inheritdoc}
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * {@inheritdoc}
     */
    public function searchEvents(SearchQueryInterface $searchQuery)
    {
        return $this->search($searchQuery, 'events');
    }

    /**
     * {@inheritdoc}
     */
    public function searchPlaces(SearchQueryInterface $searchQuery)
    {
        return $this->search($searchQuery, 'places');
    }

    /**
     * {@inheritdoc}
     */
    public function searchOffers(SearchQueryInterface $searchQuery)
    {
        return $this->search($searchQuery, 'offers');
    }

    /**
     * {@inheritdoc}
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
