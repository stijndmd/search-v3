<?php

namespace CultuurNet\SearchV3\Parameter;

use CultuurNet\SearchV3\ParameterInterface;

/**
 * Provides an abstract class for query parameters.
 */
abstract class AbstractParameter implements ParameterInterface
{
    /**
     * The key to use in the query string
     * @var string
     */
    protected $key;

    /**
     * The value to use.
     * @var string|array|integer|float|bool
     */
    protected $value;

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue()
    {
        return $this->value;
    }
}
