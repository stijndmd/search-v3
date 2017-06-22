<?php
/**
 * Created by PhpStorm.
 * User: nils
 * Date: 22/06/2017
 * Time: 00:00
 */

namespace CultuurNet\SearchV3;


/**
 * SearchQuery
 * @package CultuurNet\SearchV3
 */
interface SearchQueryInterface
{

  /**
   * Sorting options.
   */
  const SORT_DIRECTION_ASC = 'asc';
  const SORT_DIRECTION_DESC = 'desc';


  /**
   * Add a parameter to the search query.
   * @param ParameterInterface $parameter
   */
  public function addParameter(ParameterInterface $parameter);

  /**
   * Get the parameters.
   * @return array
   */
  public function getParameters();

  /**
   * Add a sort to the search query.
   */
  public function addSort($field, $direction);

  /**
   * Add a sort to the search query.
   */
  public function removeSort($field);

  /**
   * Get the sorting options.
   * @return array
   */
  public function getSort();

  /**
   * Cast the search query to an array.
   */
  public function toArray();
}