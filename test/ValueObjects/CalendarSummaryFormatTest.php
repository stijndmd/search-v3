<?php

declare(strict_types=1);

namespace CultuurNet\SearchV3\ValueObjects;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class CalendarSummaryFormatTest extends TestCase
{
    /**
     * @test
     */
    public function it_throws_on_unsupported_format(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new CalendarSummaryFormat('xl');
    }
}
