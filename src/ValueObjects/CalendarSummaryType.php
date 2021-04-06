<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use InvalidArgumentException;

final class CalendarSummaryType
{
    private const TYPES = [
        'text',
        'html',
    ];

    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        if (!in_array($value, self::TYPES)) {
            throw new InvalidArgumentException(
                'Unsupported type ' . $value . '. Allowed values: ' . implode(', ', self::TYPES)
            );
        }

        $this->value = $value;
    }

    public static function text(): self
    {
        return new self('text');
    }

    public static function html(): self
    {
        return new self('html');
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
