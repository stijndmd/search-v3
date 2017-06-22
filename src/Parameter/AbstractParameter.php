<?php

namespace CultuurNet\SearchV3;

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
     * @var
     */
    protected $value;

    /**
     * {@inheritdoc}
     */
    public function getKey() {

    }

    /**
     * {@inheritdoc}
     */
    public function getValue() {

    }

}