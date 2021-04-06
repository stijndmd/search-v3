<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use InvalidArgumentException;

final class CalendarSummary
{
    /**
     * Associative array in the form of [language][type][format]
     * @var array<string,array<string,array<string,string>>>
     */
    private $summaries;

    public function __construct(array $summaries)
    {
        $this->summaries = $summaries;
    }

    public function getSummary(
        CalendarSummaryLanguage $language,
        CalendarSummaryType $type,
        CalendarSummaryFormat $format
    ): string {
        if (!isset($this->summaries[$language->getValue()])) {
            throw new InvalidArgumentException('The language ' . $language->getValue() . ' is not provided');
        }

        if (!isset($this->summaries[$language->getValue()][$type->getValue()])) {
            throw new InvalidArgumentException('The type ' . $type->getValue() . ' is not provided');
        }

        if (!isset($this->summaries[$language->getValue()][$type->getValue()][$format->getValue()])) {
            throw new InvalidArgumentException('The format ' . $format->getValue() . ' is not provided');
        }

        return $this->summaries[$language->getValue()][$type->getValue()][$format->getValue()];
    }
}
