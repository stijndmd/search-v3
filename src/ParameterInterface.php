<?php

namespace CultuurNet\SearchV3;

/**
 * Provides an interface for search parameters.
 */
interface ParameterInterface
{
    /**
     * Get the key to use in the query string.
     */
    public function getKey(): string;

    /**
     * Get the value to use in the query string.
     */
    public function getValue();
}
