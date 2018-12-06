<?php

namespace CultuurNet\SearchV3\Serializer\Handler;

use JMS\Serializer\Handler\DateHandler;
use JMS\Serializer\JsonDeserializationVisitor;

/**
 * Custom datetime hander to handle empty dates.
 */
class DateTimeHandler extends DateHandler
{
  /**
   * @param XmlDeserializationVisitor $visitor
   * @param $data
   * @param array $type
   *
   * @return \DateTime|null
   */
  public function deserializeDateTimeFromJson(JsonDeserializationVisitor $visitor, $data, array $type)
  {

    if ((string)$data === '') {
      return null;
    }

    return parent::deserializeDateTimeFromJson($visitor, $data, $type);
  }
}