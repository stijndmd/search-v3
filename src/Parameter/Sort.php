<?php

namespace CultuurNet\SearchV3;

/**
 * Parameter used to define the sorting.
 */
class Sort
{

  /**
   * Direction constants that are allowed.
   */
  const DIRECTION_ASC = 'asc';
  const DIRECTION_DESC = 'desc';
  
  /**
   * @var string
   */
  protected $field;

  /**
   * @var string
   */
  protected $direction;


  /**
   * @param $field
   * @param string $directionp
   */
  public function __construct($field, $direction = self::DIRECTION_ASC)
  {
      $this->field = $field;
      $this->direction = $direction;
  }

  /**
   * {@inheritdoc}
   */
  public function getKey()
  {
      return 'sort';
  }

  /**
   * {@inheritdoc}
   */
  public function getValue()
  {
      return $this->direction;
  }
}