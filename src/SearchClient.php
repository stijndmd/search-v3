<?php

namespace CultuurNet\SearchV3;

use Guzzle\Http\Client;
use CultureFeed_HttpClient;
use CultureFeed_HttpResponse;
use CultureFeed_DefaultHttpClient;
use Exception;
use Guzzle\Http\ClientInterface;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Guzzle\Service\Builder\ServiceBuilderInterface;

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
     * SearchClient constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

  /**
   * @param SearchQueryInterface $searchQuery
   */
    public function searchOffers(SearchQueryInterface $searchQuery)
    {

        $options = [
          'query' => $searchQuery->toArray(),
        ];

        $request = $this->client->createRequest('GET', 'offers', null, null, $options);

        $result = $request->send();

        return $result;
    }


}
