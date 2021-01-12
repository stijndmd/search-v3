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
    protected $embed = false;

    /**
     * The number of results to skip (defaults to 0).
     * @var int
     */
    protected $start = false;

    /**
     * The number of results to return in a single page (defaults to 30).
     * @var int
     */
    protected $limit = false;

    /**
     * SearchQuery constructor.
     * @param bool $embed
     *   Return fully embedded entities, or only an array of results.
     */
    public function __construct(bool $embed = false)
    {
        $this->embed = $embed;
    }

    public function addParameter(ParameterInterface $parameter)
    {
        $this->parameters[] = $parameter;
    }

    public function removeParameter(ParameterInterface $parameter)
    {
        foreach ($this->parameters as $i => $param) {
            if ($param === $parameter) {
                unset($this->parameters[$i]);
            }
        }
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function addSort(string $field, string $direction)
    {
        $this->sorting[$field] = $direction;
    }

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

    public function getSort()
    {
        return $this->sorting;
    }

    public function setStart(int $start)
    {
        $this->start = $start;
    }

    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    public function toArray()
    {
        $query = [];
        $duplicateKeys = [];
        foreach ($this->parameters as $parameter) {
            $key = $parameter->getKey();

            // Same query key is used multiple times? Merge it into 1 query.
            if (isset($query[$key])) {
                // "facets", "regions" and "termIds" is allowed as array.
                if (in_array($key, ['facets', 'regions', 'termIds', 'labels'])) {
                    $query[$key] = is_array($query[$key]) ? $query[$key] : [$query[$key]];
                    $query[$key][] = $parameter->getValue();
                } else {
                    $duplicateKeys[$key][] = $parameter->getValue();
                }
            } else {
                $query[$key] = $parameter->getValue();
            }
        }

        // Merge the duplicate keys into the main query.
        foreach ($duplicateKeys as $key => $duplicateKeyValues) {
            // Copy the value that already exists in the query, to the duplicate array.
            $duplicateKeyValues[] = $query[$key];
            $query[$key] = '(' . implode(') AND (', $duplicateKeyValues) . ')';
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

    /**
     * Print the query as a querystring.
     */
    public function __toString()
    {
        $query = $this->toArray();

        $stringValues = [];
        foreach ($query as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $sub_key => $sub_value) {
                    $stringValues[] = $key . '[' . $sub_key . ']=' . $sub_value;
                }
            } else {
                $stringValues[] = $key . '=' . $value;
            }
        }

        return implode('&', $stringValues);
    }
}
