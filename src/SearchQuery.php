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

class SearchQuery implements SearchQueryInterface
{

    /**
     * @var ParameterInterface[]
     */
    protected $parameters = [];

    /**
     * @var array
     */
    protected $sorting = [];

    /**
     * Return the full embedded search results, or only the ids.
     * @var bool
     */
    protected $embed = FALSE;

    /**
     * The number of results to skip (defaults to 0).
     * @var int
     */
    protected $start = FALSE;

    /**
     * The number of results to return in a single page (defaults to 30).
     * @var int
     */
    protected $limit = FALSE;

    /**
     * SearchQuery constructor.
     * @param bool $embed
     *   Return fully embedded entities, or only an array of results.
     */
    public function __construct(bool $embed = false)
    {
        $this->embed = $embed;
    }

    /**
     * {@inheritdoc}
     */
    public function addParameter(ParameterInterface $parameter)
    {
        $this->parameters[] = $parameter;
    }

    /**
     * {@inheritdoc}
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function addSort(string $field, string $direction)
    {
        $this->sorting[$field] = $direction;
    }

    /**
     * {@inheritdoc}
     */
    public function removeSort(string $field)
    {
      unset($this->sorting[$field]);
    }

    /**
     * Set the embed mode.
     * @param bool $embed
     */
    public function setEmbed(bool $embed)
    {
        $this->embed = true;
    }

    /**
     * {@inheritdoc}
     */
    public function getSort()
    {
      return $this->sorting;
    }

    /**
     * {@inheritdoc}
     */
    public function setStart(int $start)
    {
        $this->start = $start;
    }

    /**
     * {@inheritdoc}
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {

        $query = [];
        foreach ($this->parameters as $parameter) {
            $key = $parameter->getKey();

            // Same query key is used multiple times? Change it to an array.
            if (isset($query[$key])) {
              $query[$key] = is_array($query[$key]) ? $query[$key] : [$query[$key]];
              $query[$key][] = $parameter->getValue();
            }
            else {
              $query[$key] = $parameter->getValue();
            }
        }

        if (!empty($this->sorting)) {
          $query['sort'] = $this->sorting;
        }

        if ($this->embed) {
            $query['embed'] = true;
        }

        if ($this->start) {
            $query['start'] = $this->start;
        }

        if ($this->limit) {
            $query['limit'] = $this->limit;
        }

        return $query;

    }

}
