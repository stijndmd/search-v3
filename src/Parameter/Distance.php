<?php

namespace CultuurNet\SearchV3\Parameter;

/**
 * Provides a parameter to search on distance.
 */
class Distance extends AbstractParameter
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

    /**
     * Distance constructor.
     * @param $distance integer
     * @param $unit
     *
     * @throws \Exception when the unit is not a constant of the class.
     */
    public function __construct($distance, $unit)
    {
        if (!preg_match('/mi|yd|ft|in|km|m|cm|mm|nmi/', $unit))
            throw new \Exception('Invalid unit parameter for '.__CLASS__.' constructor');

        $this->value = $distance . $unit;
        $this->key = 'distance';
    }
}
