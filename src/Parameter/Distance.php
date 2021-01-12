<?php

namespace CultuurNet\SearchV3\Parameter;

final class Distance extends AbstractParameter
{
    public const UNIT_MILE = 'mi';
    public const UNIT_YARD = 'yd';
    public const UNIT_FEET = 'ft';
    public const UNIT_INCH = 'in';
    public const UNIT_KILOMETER = 'km';
    public const UNIT_METER = 'm';
    public const UNIT_CENTIMETER = 'cm';
    public const UNIT_MILLIMETER = 'mm';
    public const UNIT_NAUTICAL_MILE = 'nmi';

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
