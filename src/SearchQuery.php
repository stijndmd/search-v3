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
    public function addSort($field, $direction)
    {
        $this->sorting[$field] = $direction;
    }

    /**
     * {@inheritdoc}
     */
    public function removeSort($field)
    {
      unset($this->sorting[$field]);
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

        return $query;

    }

}
