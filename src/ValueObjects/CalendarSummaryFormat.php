<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use InvalidArgumentException;

final class CalendarSummaryFormat
{
    private const FORMATS = [
        'xs',
        'sm',
        'md',
        'lg',
    ];

    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        if (!in_array($value, self::FORMATS)) {
            throw new InvalidArgumentException(
                'Unsupported format ' . $value . '. Allowed values: ' . implode(', ', self::FORMATS)
            );
        }

        $this->value = $value;
    }

    public static function xs(): self
    {
        return new self('xs');
    }

    public static function sm(): self
    {
        return new self('sm');
    }

    public static function md(): self
    {
        return new self('md');
    }

    public static function lg(): self
    {
        return new self('lg');
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
