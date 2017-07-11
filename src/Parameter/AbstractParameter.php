<?php

namespace CultuurNet\SearchV3\Parameter;

use CultuurNet\SearchV3\ParameterInterface;

/**
 * Provides an abstract class for query parameters.
 * @package CultuurNet\SearchV3
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
     * @var string
     */
    protected $value;

    /**
     * {@inheritdoc}
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * {@inheritdoc}
     */
    public function getValue() {
        return $this->value;
    }

}