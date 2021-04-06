<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\Parameter;

use CultuurNet\SearchV3\ParameterInterface;
use CultuurNet\SearchV3\ValueObjects\CalendarSummaryFormat;
use CultuurNet\SearchV3\ValueObjects\CalendarSummaryType;

final class CalendarSummary implements ParameterInterface
{
    /**
     * @var CalendarSummaryType
     */
    private $type;

    /**
     * @var CalendarSummaryFormat
     */
    private $format;

    public function __construct(CalendarSummaryType $type, CalendarSummaryFormat $format)
    {
        $this->type = $type;
        $this->format = $format;
    }

    public function getKey(): string
    {
        return 'embedCalendarSummaries';
    }

    public function getValue()
    {
        return $this->format->getValue() . '-' . $this->type->getValue();
    }

    public function allowsMultiple(): bool
    {
        return true;
    }
}
