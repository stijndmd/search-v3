<?php

namespace CultuurNet\SearchV3;

use CultuurNet\SearchV3\ValueObjects\PagedCollection;
use GuzzleHttp\ClientInterface;

/**
 * Provides an interface for search clients on the search api.
 */
interface SearchClientInterface
{

    /**
     * Set the guzzle client.
     *
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client);

    /**
     * Return the current client.
     *
     * @return ClientInterface $client
     */
    public function getClient();

    /**
     * Perform a search on events.
     *
     * @param SearchQueryInterface $searchQuery
     * @return PagedCollection
     */
    public function searchEvents(SearchQueryInterface $searchQuery, $private);

    /**
     * Perform a search on places.
     *
     * @param SearchQueryInterface $searchQuery
     * @return PagedCollection
     */
    public function searchPlaces(SearchQueryInterface $searchQuery, $private);

    /**
     * Perform a search on offers.
     * @param SearchQueryInterface $searchQuery
     * @return PagedCollection
     */
    public function searchOffers(SearchQueryInterface $searchQuery, $private);
}
