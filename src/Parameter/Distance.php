<?php

namespace CultuurNet\SearchV3\Parameter;

final class Distance extends AbstractParameter
{
    const UNIT_MILE = 'mi';
    const UNIT_YARD = 'yd';
    const UNIT_FEET = 'ft';
    const UNIT_INCH = 'in';
    const UNIT_KILOMETER = 'km';
    const UNIT_METER = 'm';
    const UNIT_CENTIMETER = 'cm';
    const UNIT_MILLIMETER = 'mm';
    const UNIT_NAUTICAL_MILE = 'nmi';

    public function __construct(int $distance, string $unit)
    {
        if (in_array($unit, self::getConstants(), true)) {
            $this->value = $distance . $unit;
            $this->key = 'distance';
        } else {
            throw new \Exception('Invalid unit parameter for '.__CLASS__.' constructor', 400);
        }
    }

    private static function getConstants(): array
    {
        $oClass = new \ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
