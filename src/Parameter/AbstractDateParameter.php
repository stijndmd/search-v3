<?php

namespace CultuurNet\SearchV3\Parameter;

use DateTimeInterface;

abstract class AbstractDateParameter extends AbstractParameter
{
    public function __construct(string $dateTime)
    {
        $this->value = $dateTime;
    }

    public static function createFromDateTime(DateTimeInterface $value): self
    {
        return new static($value->format(DATE_ATOM));
    }
}
