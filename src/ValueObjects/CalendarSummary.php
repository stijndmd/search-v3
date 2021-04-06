<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use InvalidArgumentException;

final class CalendarSummary
{
    private const LANGUAGES = [
        'nl',
        'fr',
        'de',
        'en',
    ];

    private const TYPES = [
        'text',
        'html',
    ];

    private const FORMATS = [
        'xs',
        'sm',
        'md',
        'lg',
    ];

    /**
     * Associative array in the form of [language][type][format]
     * @var array<string,array<string,array<string,string>>>
     */
    private $summaries;

    public function __construct(array $summaries)
    {
        $this->summaries = $summaries;
    }

    public function getSummary(string $language, string $type, string $format): string
    {
        if (!in_array($language, self::LANGUAGES)) {
            throw new InvalidArgumentException(
                'Unsupported language ' . $language . '. Allowed values: ' . implode(', ', self::LANGUAGES)
            );
        }

        if (!isset($this->summaries[$language])) {
            throw new InvalidArgumentException('The language ' . $language . ' is not provided');
        }

        if (!in_array($type, self::TYPES)) {
            throw new InvalidArgumentException(
                'Unsupported type ' . $type . '. Allowed values: ' . implode(', ', self::TYPES)
            );
        }

        if (!isset($this->summaries[$language][$type])) {
            throw new InvalidArgumentException('The type ' . $type . ' is not provided');
        }

        if (!in_array($format, self::FORMATS)) {
            throw new InvalidArgumentException(
                'Unsupported format ' . $format . '. Allowed values: ' . implode(', ', self::FORMATS)
            );
        }

        if (!isset($this->summaries[$language][$type][$format])) {
            throw new InvalidArgumentException('The format ' . $format . ' is not provided');
        }

        return $this->summaries[$language][$type][$format];
    }
}
