<?php

namespace CultuurNet\SearchV3;

/**
 * Provides an interface for search parameters.
 * @package CultuurNet\SearchV3
 */
interface ParameterInterface
{

  /**
   * Get the key to use in the query string.
   */
  public function getKey();

  /**
   * Get the value to use in the query string.
   */
  public function getValue();

}