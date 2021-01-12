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
   * @param JsonDeserializationVisitor $visitor
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

        if (substr($data, -1) === 'Z') {
            $type['params'][0] = 'Y-m-d\TH:i:s.u\Z';
        }

        return parent::deserializeDateTimeFromJson($visitor, $data, $type);
    }
}
